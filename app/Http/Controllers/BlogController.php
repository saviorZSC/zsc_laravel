<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;

class BlogController extends Controller
{
    //
   /* public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('upload.posts_per_page'));

        return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }*/

    public function index(Request $request)
    {
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
        $layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

        return view($layout, $data);
    }

    public function showPost($slug, Request $request)
    {
        $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
        $tag = $request->get('tag');
        if ($tag) {
            $tag = Tag::whereTag($tag)->firstOrFail();
        }

        return view($post->layout, compact('post', 'tag'));
    }
}
