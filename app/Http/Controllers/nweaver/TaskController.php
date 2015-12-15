<?php

namespace App\Http\Controllers\nweaver;

use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //接受任务创建表单的数据
        //dd($date);//测试数据正确性
        Task::create($request->all());
        return redirect('/feature/project/'.$request->input('project_id'));
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
        $task = Task::find($id)->toJson();
        return $task;
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $info = Task::updateOrCreate(['id'=>$id],$request->input());
        if($info){
            return "Update success";
        }else{
            return 'Update fail';
        }
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
        $info = Task::find($id)->delete();
        if($info){
            return "Delete success";
        }else{
            return 'Delete fail';
        }
    }
}
