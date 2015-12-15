@extends('nweaver.app')
@section('link')
    <link href="{{url('/css/projectNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('/css/project.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('nweaver.project.nav')
    <div class="first-section">
        <ul id="myTab" class="nav nav-tabs">
            <li class="dropdown">
                <a href="#" id="myTabDrop1" class="dropdown-toggle"
                   data-toggle="dropdown">项目<b class="caret"></b> </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                    <li><a href="#" tabindex="-1" data-toggle="tab">这里要从数据库获取数据</a> </li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </li>
            <li><a href="#task" data-toggle="tab">Tasks</a></li>
            <li><a href="#share" data-toggle="tab">Share</a></li>
            <li><a href="#file" data-toggle="tab">File</a></li>
            <li><a href="#agenda" data-toggle="tab">Schedule</a></li>
            <li><a href="#tabs" data-toggle="tab">Labs</a></li>
            <li><a href="#setting" data-toggle="tab">Setting</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="task">
                <ul id="myTab1" class="nav nav-tabs">
                    <li class="dropdown">
                        <a href="#" id="myTabDrop2" class="dropdown-toggle"
                           data-toggle="dropdown">Main task<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop2">
                            <li><a href="#main" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#today" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#run" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#undefine" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#finish" tabindex="-1" data-toggle="tab">1</a></li>
                        </ul>
                    </li>
                </ul>
                <div id="myTabContent1" class="tab-content">
                    <div class="tab-pane fade in active" id="main">
                        @include('nweaver.project.maintask')
                    </div>
                    <div class="tab-pane fade" id="today">
                        today
                    </div>
                    <div class="tab-pane fade" id="run">
                        run
                    </div>
                    <div class="tab-pane fade" id="undefine">
                        undefine
                    </div>
                    <div class="tab-pane fade" id="finish">
                        finish
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="share">
                This is share.
            </div>
            <div class="tab-pane fade" id="file">
                this is file
            </div>
            <div class="tab-pane fade" id="agenda">
                this is schedule
            </div>
            <div class="tab-pane fade" id="tabs">
                This is labs
            </div>
            <div class="tab-pane fade" id="setting">
                <ul id="myTab2" class="nav nav-tabs">
                    <li class="active col-md-4 text-center" style="padding: 0;">
                        <a href="#info" data-toggle="tab">Project information</a>
                    </li>
                    <li class="col-md-4 text-center" style="padding: 0;">
                        <a href="#users" data-toggle="tab">User Manager</a>
                    </li>
                    <li class="col-md-4 text-center" style="padding: 0;">
                        <a href="#manager" data-toggle="tab">Advanced Settings</a>
                    </li>
                </ul>
                <div id="myTabContent2" class="tab-content container">
                    <div class="tab-pane fade in active " id="info">
                        <form id="form" role="form" action="{{url('/feature/project/'.$project->id)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH" />
                            <div class="form-group">
                                <label class="control-label">Project Cover</label>
                                <select class="form-control" name="title">
                                    <option value="media" @if($project->title=='media')selected="selected"@endif>Media</option>
                                    <option value="design" @if($project->title=='design')selected="selected"@endif>Design</option>
                                    <option value="education" @if($project->title=='education')selected="selected"@endif>Education</option>
                                    <option value="internet" @if($project->title=='internet')selected="selected"@endif>Internet</option>
                                    <option value="mobileApp" @if($project->title=='mobileApp')selected="selected"@endif>Mobile App</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Project Name</label>
                                <input class="form-control" type="text" name="name" placeholder="project name" value="{{$project->name}}" />
                            </div>
                            <div class="form-group">
                                <label >Project Decoration</label>
                                <textarea class="form-control" name="content" rows="3" placeholder="Project Contetn">{{$project->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="users">
                        Users
                    </div>
                    <div class="tab-pane fade" id="manager">
                        <a class="btn btn-primary" href="{{url('')}}">Archive</a>
                        <form action="{{url('/feature/project/'.$project->id)}}" method="post" class="inline">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="delete" />
                            <button class="btn btn-warning" type="submit" id="delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('/javascript/jquery-ui.min.js')}}"></script>
    <script>
        $('#delete').on('click',function(){
            if(confirm("Are you want to delete?")){
                return true;
            }else{
                return false;
            }
        });
        $(function () {
            $('.sortable').sortable();
        });


        $(document).ready(function(){
            $("#taskModalshow").on("show.bs.modal",function(event){
                var span = $(event.relatedTarget);
                var recipient = span.data("whatever");
                $("#url").attr('data-whatever',recipient);
                $("#result").attr('class',"text-center text-success");
                $("#result").text("Request Data,please wait...");
                $.get(recipient,function(data){
                    var json = eval("("+data+")");
                    //console.info(json);
                    //$("#result").text(json);//测试获取数据
                    $("#result").text('');
                    $("#taskflag").val(json.flag);
                    $("#taskname").val(json.name);
                    $("#tasktitle").val(json.title);
                    $("#taskcontent").text(json.content);
                }).error(function(){
                    $("#result").attr('class',"text-center text-danger");
                    $("#result").text("Content fail");
                });
            }),function(){
                var test = $("#url").removeAttr('data-whatever');
                alert(test);
            }
        });
        $("#updatetasks").on('click',function(){
            var url =$("#url").data("whatever");
            var tasksdata = {name:$("#taskname").val(),title:$("#tasktitle").val(),
                content:$("#taskcontent").val(),flag:$("#taskflag").val()}
            //console.info(tasksdata);//测试数据
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"PATCH",
                url:url,
                data:tasksdata,
                success:function(data){
                    var result = $('#result')
                    result.attr('class',"text-center text-success");
                    result.text(data);
                    result.fadeOut(2000);
                }
            })
        });
        $("#deletetasks").on('click',function(){
            var url =$("#url").data("whatever");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"DELETE",
                url:url,
                success:function(data){
                    var result = $('#result');
                    result.attr('class',"text-center text-success");
                    result.text(data);
                    result.fadeOut(1000);
                    setTimeout(function(){
                        window.location.reload();
                    },1001);
                }
            })
        });
        $(".taskactive").on('click',function(){
            var tasklist = $(this).parent().parent().parent().children('.panel-set').children('.tasklist');
            /*tasklist.attr("data-content","test");
            tasklist.popover('show');*/
            var url = $(this).parent().children('.task_a').children('.tasksshow').data("whatever");
            console.info(url);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"PATCH",
                url:url,
                data:{flag:1},
                success:function(data){
                    tasklist.attr("data-content",data);
                    tasklist.popover('show');
                    setTimeout(function(){
                        window.location.reload();
                    },1500);

                }
            })
        });
        $(".taskfinish").on('click',function(){
            var tasklist = $(this).parent().parent().parent().children('.panel-set').children('.tasklist');
            var url = $(this).parent().children('.task_a').children('.tasksshow').data("whatever");
            //console.info(url);
            //console.info(tasklist);
            console.info(url);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"PATCH",
                url:url,
                data:{flag:2},
                success:function(data){
                    tasklist.attr("data-content",data);
                    tasklist.popover('show');
                    setTimeout(function () {
                        window.location.reload();
                    },1500);

                }
            })
        });
    </script>
@endsection
