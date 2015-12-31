<?php

namespace App\Models;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
    protected $dates = ['published_at'];

    //添加可填充的字段
    protected $fillable = [
        'title', 'subtitle', 'content_raw', 'page_image', 'meta_description','layout', 'is_draft', 'published_at',
    ];

    /**
     * The many-to-many relationship between posts and tags.
     *定义posts和tags多对多的关系
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tag_pivot');
    }


    /**
     * Set the title attribute and automatically the slug
     *设置title的属性
     * @param string $value
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }


    /**
     * Recursive routine to set a unique slug
     *递归设置唯一的slug
     * @param string $title
     * @param mixed $extra
     */
    protected function setUniqueSlug($title, $extra)
    {
        $slug = str_slug($title.'-'.$extra);

        if (static::whereSlug($slug)->exists()) {
            $this->setUniqueSlug($title, $extra + 1);
            return;
        }

        $this->attributes['slug'] = $slug;
    }

    /**
     * Set the HTML content automatically when the raw content is set
     *设置当有新内容写入的时候内容的html格式自动转换的属性
     * @param string $value
     */
    public function setContentRawAttribute($value)
    {
        $markdown = new Markdowner();

        $this->attributes['content_raw'] = $value;
        $this->attributes['content_html'] = $markdown->toHTML($value);
    }

    /**
     * Sync tag relation adding new tags as needed
     *需要添加新标签的同步标记关系
     * @param array $tags
     */
    public function syncTags(array $tags)
    {
        Tag::addNeededTags($tags);

        if (count($tags)) {
            $this->tags()->sync(
                Tag::whereIn('tag', $tags)->lists('id')->all()
            );
            return;
        }

        $this->tags()->detach();
    }

    /**
     * Return the date portion of published_at
     */
    public function getPublishDateAttribute($value)
    {
        return $this->published_at->format('M-j-Y');
    }

    /**
     * Return the time portion of published_at
     */
    public function getPublishTimeAttribute($value)
    {
        return $this->published_at->format('g:i A');
    }

    /**
     * Alias for content_raw
     * 获取新内容
     */
    public function getContentAttribute($value)
    {
        return $this->content_raw;
    }

    /**
     * Return URL to post
     *
     * @param Tag $tag
     * @return string
     */
    public function url(Tag $tag = null)
    {
        $url = url('blog/'.$this->slug);
        if ($tag) {
            $url .= '?tag='.urlencode($tag->tag);
        }

        return $url;
    }

    /**
     * Return array of tag links
     *
     * @param string $base
     * @return array
     */
    public function tagLinks($base = '/blog?tag=%TAG%')
    {
        $tags = $this->tags()->lists('tag');
        $return = [];
        foreach ($tags as $tag) {
            $url = str_replace('%TAG%', urlencode($tag), $base);
            $return[] = '<a href="'.$url.'">'.e($tag).'</a>';
        }
        return $return;
    }

    /**
     * Return next post after this one or null
     *
     * @param Tag $tag
     * @return Post
     */
    public function newerPost(Tag $tag = null)
    {
        $query =
            static::where('published_at', '>', $this->published_at)
                ->where('published_at', '<=', Carbon::now())
                ->where('is_draft', 0)
                ->orderBy('published_at', 'asc');
        if ($tag) {
            $query = $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('tag', '=', $tag->tag);
            });
        }

        return $query->first();
    }

    /**
     * Return older post before this one or null
     *
     * @param Tag $tag
     * @return Post
     */
    public function olderPost(Tag $tag = null)
    {
        $query =
            static::where('published_at', '<', $this->published_at)
                ->where('is_draft', 0)
                ->orderBy('published_at', 'desc');
        if ($tag) {
            $query = $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('tag', '=', $tag->tag);
            });
        }

        return $query->first();
    }
/*blog.layouts.index 视图会使用 url() 方法链接到指定文章详情页。
tagLinks() 方法返回一个链接数组，每个链接都会指向首页并带上标签参数。
newerPost() 方法返回下一篇文章链接，如果没有的话返回 null。
olderPost() 方法返回前一篇文章链接，如果没有返回 null。*/

}
