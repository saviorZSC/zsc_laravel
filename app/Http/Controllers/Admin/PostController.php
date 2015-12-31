<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Jobs\PostFormFields;
use App\Http\Requests;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('admin.post.index')->withPosts(Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $date = $this->dispatch(new PostFormFields());
        return view('admin.post.create',$date);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostCreateRequest $request)
    {
        //
        $post = Post::create($request->postFillData());
        $post->syncTags($request->get('tags',[]));
        return redirect()->route('admin.post.index')
            ->withSuccess('New Post Successful Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $data =$this->dispatch(new PostFormFields($id));
        return view('admin.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(PostCreateRequest $request,$id)
    {
        //
        $post = Post::findOrFail($id);
        $post->fill($request->postFillData());
        $post->save();
        $post->syncTags($request->get('tags', []));

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('Post saved.');
        }

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('Post saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('Post deleted.');

    }
}
