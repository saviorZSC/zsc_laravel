@extends('nweaver.app')
@section('link')
    <link href="{{url('/css/support.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="first-section">
        <div class="container">
            <div class="input-group input-group-lg input-control ">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search" ></span>
                    </button>
                </span>
                <input type="text" class="form-control" placeholder="Search key words" />
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Search</button></span>
            </div>
        </div>
    </div>
    <div class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="thumbnail a-thumbnail">
                        <p class="text-center"><i class="icon-zoom-in icon-control"></i> </p>
                        <p class="text-center">Try to Strat</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="thumbnail a-thumbnail">
                        <p class="text-center"><i class="icon-cog icon-control"></i> </p>
                        <p class="text-center">Primary tutorial</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="thumbnail a-thumbnail">
                        <p class="text-center"><i class="icon-cogs icon-control"></i> </p>
                        <p class="text-center">Advanced turorial</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="thumbnail a-thumbnail">
                        <p class="text-center"><i class="icon-play-circle icon-control"></i> </p>
                        <p class="text-center">Video tutorial</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="third-section">
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item list-group-item-info"><h3>Common problems</h3></li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="thumbnail thumbnail-decoration text-center">
                        <span><i class="icon-credit-card icon-set"></i></span>
                        <span>Look template</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="thumbnail thumbnail-decoration text-center">
                        <span><i class="icon-group icon-set"></i></span>
                        <span>Into commuity</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="#" class="thumbnail thumbnail-decoration text-center">
                        <span><i class="icon-globe icon-set"></i></span>
                        <span>If you have any problem,contract us.</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('nweaver.footer')
    @endsection
@section('script')
    <script >
        $("#navbarul li:eq(4) a").addClass("navactive");
    </script>
@endsection
