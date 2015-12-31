@extends('nweaver.project.projectmodel')
@section('tab-pane')
    <div class="tab-pane fade in active" id="task">
        <ul id="myTab1" class="nav nav-tabs">
            <li class="dropdown">
                <a href="#" id="myTabDrop2" class="dropdown-toggle"
                   data-toggle="dropdown">Option<b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop2">
                    <li><a href="#main" tabindex="-1" data-toggle="tab">Main tasks</a></li>
                    <li><a href="#plan" tabindex="-1" data-toggle="tab">Planning tasks</a></li>
                    <li><a href="#run" tabindex="-1" data-toggle="tab">Running tasks</a></li>
                    <li><a href="#finish" tabindex="-1" data-toggle="tab">Finish</a></li>
                    <li><a href="#undefine" tabindex="-1" data-toggle="tab">Undefine</a></li>
                </ul>
            </li>
        </ul>
        <div id="myTabContent1" class="tab-content">
            <div class="tab-pane fade in active" id="main">
                @include('nweaver.project.maintask')
            </div>
            <div class="tab-pane fade" id="plan">
                @include('nweaver.project.plantask')
            </div>
            <div class="tab-pane fade" id="run">
                @include('nweaver.project.runtask')
            </div>
            <div class="tab-pane fade" id="finish">
                @include('nweaver.project.finishtask')
            </div>
            <div class="tab-pane fade" id="undefine">
                <div class="container">
                    <div class="jumbotron">
                        <h1 class="text-center">The feature is developing.</h1>
                        <p class="text-right">waiting....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection