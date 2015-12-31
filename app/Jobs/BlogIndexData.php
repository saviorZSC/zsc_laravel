<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class BlogIndexData extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *构造函数
     * @return void
     */
    public function __construct($tag)
    {
        //
        $this->tag = $tag;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        if($this->tag){
            return $this->tagIndexData($this->tag);
        }
        return $this->normalIndexData();
    }

    /**
     * Return data for normal index page
     *
     * @return array
     */
    protected function normalIndexData()
    {
        $posts = Post::with('tags')
            ->where('published_at', '<=', Carbon::now())
            ->where('is_draft', 0)
            ->orderBy('published_at', 'desc')
            ->simplePaginate(config('upload.posts_per_page'));

        return [
            'title' => config('upload.title'),
            'subtitle' => config('upload.subtitle'),
            'posts' => $posts,
            'page_image' => config('upload.page_image'),
            'meta_description' => config('upload.description'),
            'reverse_direction' => false,
            'tag' => null,
        ];
    }

    /**
     * Return data for a tag index page
     *
     * @param string $tag
     * @return array
     */
    protected function tagIndexData($tag)
    {
        $tag = Tag::where('tag', $tag)->firstOrFail();
        $reverse_direction = (bool)$tag->reverse_direction;

        $posts = Post::where('published_at', '<=', Carbon::now())
            ->whereHas('tags', function ($q) use ($tag) {
                $q->where('tag', '=', $tag->tag);
            })
            ->where('is_draft', 0)
            ->orderBy('published_at', $reverse_direction ? 'asc' : 'desc')
            ->simplePaginate(config('upload.posts_per_page'));
        $posts->addQuery('tag', $tag->tag);

        $page_image = $tag->page_image ?: config('upload.page_image');

        return [
            'title' => $tag->title,
            'subtitle' => $tag->subtitle,
            'posts' => $posts,
            'page_image' => $page_image,
            'tag' => $tag,
            'reverse_direction' => $reverse_direction,
            'meta_description' => $tag->meta_description ?: config('upload.description'),
        ];
    }
}
