@extends('nweaver.app')
@section('link')
    <link href="/css/commuity.css" rel="stylesheet" type="text/css" />@endsection
@section('content')
    @include('nweaver.nav')

    <div class="first-section">
        <div class="container">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-7">
                        <form action="" method="">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search key words" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-search" ></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-5">
                        <div class="text-center">
                            <a class="btn btn-primary" href="#">Publish article</a>
                        </div>
                    </div>
                    <div class="col-md-12 commuity-content">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info"><span class="commuity-content-title">Commuity content</span></li>
                            <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                            <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                            <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                            <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Example Question</a> </li>
                            <li class="list-group-item"><i class=" icon-question-sign list-icon-control "></i><a href="#">Data form database.</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 hidden-xs">
                <div class="heightset">
                    <a href="#" class="thumbnail thumbnail-set">
                        <div class="commuity-side-thumbnil">
                            <i class="icon-book icon-set"></i>
                        </div>
                        <span class="text">Use guide</span>
                    </a>
                </div>
                <div class="heightset">
                    <a href="#" class="thumbnail thumbnail-set">
                        <div class="commuity-side-thumbnil">
                            <i class="icon-facetime-video icon-set"></i>
                        </div>
                        <span class="text">Video display</span>
                    </a>
                </div>
                <div class="heightset">
                    <a href="#" class="thumbnail thumbnail-set">
                        <div class="commuity-side-thumbnil">
                            <i class="icon-credit-card icon-set"></i>
                        </div>
                        <span class="text">Case show</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('nweaver.footer')
@endsection
@section('script')
    <script >
        $("#navbarul li:eq(3) a").addClass("navactive");
    </script>
@endsection