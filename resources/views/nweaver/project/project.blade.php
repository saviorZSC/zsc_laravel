@extends('nweaver.app')
@section('link')
    <link href="/css/projectNav.css" rel="stylesheet" type="text/css" />
    <link href="/css/project.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('nweaver.project.nav')
    <div class="first-section">
        <div class="container">
            <div>
                <div class="row">
                    <h3>Private Project</h3><hr />
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--这里的数据需要从数据库取-->
                        <div class="project_item">
                            <a href="/feature/project/1" class="thumbnail a-thumbnail">
                                <img src="/image/project_img/project_item.jpg" alt="" />
                            </a>
                            <div class="project_decoration">
                                <h4 class="pull-left">Template Project</h4>
                                <h4 class="pull-right">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @foreach($ownProject as $project)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!--这里的数据需要从数据库取-->
                            <div class="project_item">
                                <a href="{{url('/feature/project/'.$project->id)}}" class="thumbnail a-thumbnail">
                                    <img src="{{$project->img_url}}" alt="" />
                                </a>
                                <div class="project_decoration">
                                    <h4 class="pull-left">{{$project->name}}</h4>
                                    <h4 class="pull-right">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <h3>Finish Project</h3><hr />
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @endsection