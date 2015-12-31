@if(Auth::check())
    <!--模态框-->
    <!--创建tasks表单-->
    <div class="modal" id="taskModalplan" tabindex="-1" role="dialog" aria-labelledby="myModallable" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="ture">&times;</span>
                    </button>
                    <h3 class="modal-title" id="myModallabel">New Tasks</h3>
                </div>
                <div class="modal-body">
                    <h4 class="project_title">Tasks information</h4>
                    <form id="formtask1" role="form" action="{{url('/feature/task/store')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="project_id" value="{{$project_id}}" />
                        <div class="form-group">
                            <label class="control-label">Tasks Cover</label>
                            <select class="form-control" name="flag">
                                <option value="0">Planning</option>
                                <option value="1">Running</option>
                                <option value="2">Finish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Tasks Name</label>
                            <input class="form-control" type="text" name="name" placeholder="project name" value="" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Title</label>
                            <input class="form-control" type="text" name="title" placeholder="project title" value="" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Decoration</label>
                            <textarea class="form-control" name="content" rows="3" placeholder="Project Content"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="submit" form="formtask1" class="btn btn-primary" >Create</button>
                </div>
            </div>
        </div>
    </div>
    <!--查看tasks内容的模态框-->
    <div class="modal" id="taskModalshowplan" tabindex="-1" role="dialog" aria-labelledby="myModallable" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="ture">&times;</span>
                    </button>
                    <h3 class="modal-title" id="myModallabel">Tasks Show</h3>
                </div>
                <div class="modal-body">
                    <h4 class="project_title">Tasks information</h4>
                    <div id="url1" class="url">
                        <p id="result1" class="result" data-toggle="popover"></p>
                        <div class="form-group">
                            <label class="control-label">Tasks Cover</label>
                            <select class="form-control taskflag" id="taskflag" name="flag">
                                <option value="0">Planning</option>
                                <option value="1">Running</option>
                                <option value="2">Finish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Tasks Name</label>
                            <input class="form-control taskname" type="text" id="taskname" name="name" placeholder="project name" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Title</label>
                            <input class="form-control tasktitle" type="text" id="tasktitle"  name="title" placeholder="project title" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Decoration</label>
                            <textarea class="form-control taskcontent" id="taskcontent" name="content" rows="3" placeholder="Project Content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary updatetasks" id="updatetasks" >Update</button>
                    <button type="button" class="btn btn-danger deletetasks" id="deletetasks">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container-fluid">
    <div class="col-md-12">
        <div class="panel panel-info sortable-content taskcontainer" >
            <div class="panel-heading panel-info panel-set">
                <h4 class="inline tasklist" tabindex="0" data-toggle="popover" data-trigger="focus" title="Operation tips"
                    data-content="">
                    Planning >
                </h4>
                <div class="dropdown pull-right">
                    <span class="glyphicon glyphicon-hand-down" id="dLabel"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li class="text-center"><h4>Task Menu</h4></li>
                        <li class="divider"></li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#taskModalplan">
                                <span class="glyphicon glyphicon-pencil padding_set"></span> Create Menu
                            </a>
                        </li>
                        <!--
                        <li class="divider"></li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-folder-close padding_set"></span> Archive all tasks
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-move padding_set"></span> Move tasks
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-trash padding_set"></span> Delete all tasks
                            </a>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
            <table id="plantask-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Project_id</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach($planTasks as $task)
                    <tr class="_tasks">
                        <td>
                            <a href="#" class="task_a">
                                <span  data-toggle="modal" data-target="#taskModalshowplan" class="tasksshow"  data-whatever="{{url('/feature/task/'.$task->id)}}" class="pull-left">
                                    {{$task->name}}
                                </span>
                            </a>
                        </td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->content}}</td>
                        <td>{{$task->project_id}}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-xs tasksfinish">Finish</button>
                            <button type="button" class="btn btn-success btn-xs tasksactive">Active</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>