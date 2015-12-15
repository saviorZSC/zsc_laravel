@extends('nweaver.app')
@section('link')
@endsection
@section('content')
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
            <li><a href="#task" data-toggle="tab">任务</a></li>
            <li><a href="#share" data-toggle="tab">分享</a></li>
            <li><a href="#file" data-toggle="tab">文件</a></li>
            <li><a href="#agenda" data-toggle="tab">日程</a></li>
            <li><a href="#tabs" data-toggle="tab">标签</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="task">
                <ul id="myTab1" class="nav nav-tabs">
                    <li class="dropdown">
                        <a href="#" id="myTabDrop2" class="dropdown-toggle"
                           data-toggle="dropdown">主要任务<b class="caret"></b> </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop2">
                            <li><a href="#main" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#today" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#run" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#undefine" tabindex="-1" data-toggle="tab">1</a></li>
                            <li><a href="#finish" tabindex="-1" data-toggle="tab">1</a></li>

                        </ul>
                        <div id="myTabContent1" class="tab-content">
                            <div class="tab-pane fade in active" id="main">
                                main
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
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="share">
                这里是分享
            </div>
            <div class="tab-pane fade" id="file">
                这里是文件
            </div>
            <div class="tab-pane fade" id="agenda">
                这里是日程
            </div>
            <div class="tab-pane fade" id="tabs">
                这里是标签
            </div>
        </div>
    </div>

    <div>
            {{print_r($message = session('message',[]))}}
    </div>
@endsection
@section('script')
@endsection