@if(Auth::check())
    <!--模态框-->
    <!--创建tasks表单-->
    <div class="modal" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="myModallable" aria-hidden="true">
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
                    <form id="formtask" role="form" action="{{url('/feature/task/store')}}" method="post">
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
                            <input class="form-control" type="text" name="name" placeholder="project name" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Title</label>
                            <input class="form-control" type="text" name="title" placeholder="project title" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Decoration</label>
                            <textarea class="form-control" name="content" rows="3" placeholder="Project Contetn"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="submit" form="formtask" class="btn btn-primary" >Create</button>
                </div>
            </div>
        </div>
    </div>
    <!--查看tasks内容的模态框-->
    <div class="modal taskModalshow" id="taskModalshow" tabindex="-1" role="dialog" aria-labelledby="myModallable" aria-hidden="true">
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
                    <div id="url">
                        <p id="result"></p>
                        <div class="form-group">
                            <label class="control-label">Tasks Cover</label>
                            <select class="form-control" id="taskflag" name="flag">
                                <option value="0">Planning</option>
                                <option value="1">Running</option>
                                <option value="2">Finish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Tasks Name</label>
                            <input class="form-control" type="text" id="taskname" name="name" placeholder="project name" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Title</label>
                            <input class="form-control" type="text" id="tasktitle" name="title" placeholder="project title" />
                        </div>
                        <div class="form-group">
                            <label >Tasks Decoration</label>
                            <textarea class="form-control" id="taskcontent" name="content" rows="3" placeholder="Project Content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" id="updatetasks" >Update</button>
                    <button type="button" class="btn btn-danger" id="deletetasks">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="sortable container-fluid">
    <div class="col-md-2 col-sm-3">
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
                            <a href="#" data-toggle="modal" data-target="#taskModal">
                                <span class="glyphicon glyphicon-pencil padding_set"></span> Create Menu
                            </a>
                        </li>
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
                    </ul>
                </div>
            </div>
            <ul class="list-group sortable">
                @foreach($planTasks as $task)
                    <li class="list-group-item item-height">
                        <a href="#" class="task_a">
                            <span  data-toggle="modal" data-target="#taskModalshow" class="tasksshow"  data-whatever="{{url('/feature/task/'.$task->id)}}" class="pull-left">{{$task->name}}</span>
                        </a>
                        <button type="button" class="btn btn-primary btn-xs pull-right taskfinish pull-set">Finish</button>
                        <button type="button" class="btn btn-success btn-xs pull-right taskactive">Active</button>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="col-md-2 col-sm-3">
        <div class="panel panel-info sortable-content taskcontainer" >
            <div class="panel-heading panel-info panel-set">
                <h4 class="inline tasklist" tabindex="0" data-toggle="popover" data-trigger="focus" title="Operation tips"
                    data-content="">
                    Running >
                </h4>
                <div class="dropdown pull-right">
                    <span class="glyphicon glyphicon-hand-down" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li class="text-center"><h4>Task Menu</h4></li>
                        <li class="divider"></li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#taskModal">
                                <span class="glyphicon glyphicon-pencil padding_set"></span> Create Menu
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-folder-close padding_set"></span> Archive tasks
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
                    </ul>
                </div>
            </div>
            <ul class="list-group sortable">
                @foreach($runTasks as $task)
                    <li class="list-group-item item-height">
                        <a href="#" class="task_a">
                            <span  data-toggle="modal" data-target="#taskModalshow" class="tasksshow"  data-whatever="{{url('/feature/task/'.$task->id)}}" class="pull-left">{{$task->name}}</span>
                        </a>
                        <button type="button" class="btn btn-primary btn-xs pull-right taskfinish">Finish</button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-2 col-sm-3 ">
        <div class="panel panel-info sortable-content taskcontainer" data-whatever="abc">
            <div class="panel-heading panel-info panel-set">
                <h4 class="inline tasklist" tabindex="0" data-toggle="popover" data-trigger="focus" title="Operation tips"
                    data-content="">
                    Finish >
                </h4>
                <div class="dropdown pull-right">
                    <span class="glyphicon glyphicon-hand-down" id="dLabel"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li class="text-center"><h4>Task Menu</h4></li>
                        <li class="divider"></li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#taskModal">
                                <span class="glyphicon glyphicon-pencil padding_set"></span> Create Menu
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-folder-close padding_set"></span> Archive tasks
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
                    </ul>
                </div>
            </div>
            <ul class="list-group sortable">
                @foreach($finishTasks as $task)
                    <li class="list-group-item item-height">
                        <a href="#" class="task_a">
                            <span  data-toggle="modal" data-target="#taskModalshow" class="tasksshow"  data-whatever="{{url('/feature/task/'.$task->id)}}" class="pull-left">{{$task->name}}</span>
                        </a>
                        <button type="button" class="btn btn-success btn-xs pull-right taskactive">Active</button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>