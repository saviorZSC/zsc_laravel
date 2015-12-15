<?php

namespace App\Http\Controllers\nweaver;

use App\User;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //feature功能区代码
    }
    public function project()
    {
        //$ownProject = User::where('id','=',Auth::user()->id)->projects()->get();
        if(Auth::guest()){
            return  redirect('/auth/login');
        }
        $user = User::find(Auth::user()->id);
        //dd($user);
        $ownProject = $user->projects;
        /*foreach($ownProject as $p){
            echo $p->title;
        }*/
        return view('nweaver.project.project',['ownProject'=>$ownProject]);
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
        //判断是否登陆
        if(Auth::guest()){
            return  redirect('/auth/login');
        }
        $default = array('status'=>'1','img_url'=>'/image/project_img/project_item.jpg');
        $date = $request->all() +$default;
        //dd($date);//测试数据正确性
        Project::create($date);
        return redirect('/feature/project');

        //
    }


    public function show($id){
        $project = Project::find($id);
        //$tasks = Project::find($id)->tasks();
        $runTasks = Project::find($id)->tasks()->where('flag','=',1)->get();
        $planTasks = Project::find($id)->tasks()->where('flag','=',0)->get();
        $finishTasks = Project::find($id)->tasks()->where('flag','=',2)->get();
        //dd($planTasks);
        return view('nweaver.project.task',['project'=>$project,
            'runTasks'=>$runTasks,'planTasks'=>$planTasks,'finishTasks'=>$finishTasks,
            'project_id'=>$id]);
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
        //dd($request->all());
        Project::updateOrCreate(['id'=>$id],$request->input());
        return redirect('/feature/project/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //找出指定数据然后删除
        Project::find($id)->delete();
        return redirect('/feature/project');
    }
}
