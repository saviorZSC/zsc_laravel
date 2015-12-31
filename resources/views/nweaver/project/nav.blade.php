@if(Auth::check())
<!--模态框-->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModallable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ture">&times;</span>
                </button>
                <h3 class="modal-title" id="myModallabel">New Project</h3>
            </div>
            <div class="modal-body">
                <h4 class="project_title">Project information</h4>
                <form id="form1" role="form" action="{{url('/feature/project/store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label">Project Cover</label>
                        <select class="form-control" name="title">
                            <option value="media">Media</option>
                            <option value="design">Design</option>
                            <option value="education">Education</option>
                            <option value="internet">Internet</option>
                            <option value="mobileApp">Mobile App</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Project Name</label>
                        <input class="form-control" type="text" name="name" placeholder="project name" />
                    </div>
                    <div class="form-group">
                        <label >Project Decoration</label>
                        <textarea class="form-control" name="content" rows="3" placeholder="Project Contetn"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                <button type="submit" form="form1" class="btn btn-primary" >Create</button>
            </div>
        </div>
    </div>
</div>
@endif

<!--导航栏-->
<nav class="navbar navbar-default navbar-fixed-top main-navigation" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="" href="{{url('/')}}"><img class="navbar-nav-height nav-marginright" src="{{url('/image/logo_en.png')}}" alt="N-weaver log" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-exl-collapse">
            <ul id="navbarul" class="nav navbar-nav">
                <li><a href="{{url('/feature/project')}}">Project</a></li>
                <li><a href="{{url('/feature/enterprise')}}">Enterprise</a></li>
                <li><a href="{{url('/feature/mine')}}">Mine</a></li>
                <li class="hidden-sm"><a href="{{url('/feature/calendar')}}">Calendar</a></li>
                <li class="hidden-sm"><a href="{{url('/feature/Message')}}">Message</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs hidden-sm">
                    <form class="form-inline " style="padding-top: 8px;margin-right: 20px;" action="" >
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Search keywords" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-search" ></span>
                                    </button>
                                </span>
                        </div>
                    </form>
                </li>
                @if(Auth::guest())
                    <li><a ><i class=" icon-plus-sign icon-large disabled"></i></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle inblock" data-toggle="dropdown"><i class=" icon-plus-sign icon-large"></i> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-book"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#" data-toggle="modal" data-target="#myModal">Project</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-home"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Enterprise</a></div>
                            </li>
                            <li class="divider"></li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-tasks"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Tasks</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-file-alt"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">File</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-envelope"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Event</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-share"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Share</a></div>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(Auth::guest())
                    <li><a href="{{url('/auth/login')}}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle inblock" data-toggle="dropdown">{{Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-user"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Useinfo</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-book"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Project</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-cog"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="#">Setting</a></div>
                            </li>
                            <li class="container-fluid">
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="icon-signout"></i></div>
                                <div class="col-md-9 col-sm-9 col-xs-10"><a href="{{url('/auth/logout')}}">Logout</a></div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav><!--/div.nav-->