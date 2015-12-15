<?php

namespace App\Http\Controllers\nweaver;

use Illuminate\Http\Request;

use App\Models\Article;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommuityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $articles = Article::where('publish_time','<=',Carbon::now())
                        ->orderBy('publish_time','desc')
                        ->paginate(15);
        return view('nweaver.commuity',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //返回/resource/view/nweaver/commuity下的create.blade.php页面
        //创建文章
        return view('nweaver.commuity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //测试运行逻辑是否成功
        /*$data = $request->all();
        return $data;*/
        Article::create($request->all());
        return redirect('/commuity');

        //
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
        $article = Article::find($id);
//        dd($article);
        return view('nweaver.commuity.show',['article' =>$article]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id=null)
    {
        //返回/resource/view/nweaver/commuity下的create.blade.php页面
        //编辑文章文章
        $article = Article::find($id);
        return view('nweaver.commuity.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        //
        //dd($request->input());
        Article::updateOrCreate(['id'=>$id],$request->input());
        return redirect('/commuity');
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

    }
}
