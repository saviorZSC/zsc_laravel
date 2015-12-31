@extends('nweaver.app')
@section('link')
    <link href="{{url('/css/template.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="first-section">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="carouselimagesize" src="{{url('image/first-section-bg.jpg')}}" alt="First slide" />
                    <div class="carousel-caption carousel-content">
                        <h3>College</h3>
                        <p>The effective Management of course. </p>
                        <a class="bootonset">Learn more</a>
                    </div>
                </div>
                <div class="item">
                    <img class="carouselimagesize" src="{{url('image/first-section-bg2.jpg')}}" alt="Second slide" />
                    <div class="carousel-caption carousel-content">
                        <h3>Advertisement</h3>
                        <p>The count to Advertisement's distribution. </p>
                        <a class="bootonset">Learn more</a>
                    </div>
                </div>
                <div class="item">
                    <img class="carouselimagesize" src="{{url('image/first-section-bg3.jpg')}}" alt="Third slide" />
                    <div class="carousel-caption carousel-content">
                        <h3>Business</h3>
                        <p>The effective Management of  transaction. </p>
                        <a class="bootonset">Learn more</a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <!--
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            -->
        </div>
    </div>
    <div class="second-section">
        <div class="container">
            {{--This is the pannel of template project--}}
            <div class="row">
                <div class="col-md-12 headhandle">
                    <h3>Template:</h3>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/office-610x407.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/office-610x407.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/office-610x407.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/office-610x407.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/office-610x407.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/office-610x407.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>

            </div>
            {{--this is the pannel example for tempalte subject--}}
            <div class="row">
                <div class="col-md-12 headhandle"><h3>Subject</h3></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/pannel-example1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/pannel-example2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/pannel-example3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/pannel-example4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/pannel-example5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <a href="#"><img class="image-size" src="{{url('/image/pannel-example6.jpg')}}" alt="" /></a>
                        </div>
                        <div class="panel-heading panel-info panel-set">
                            <h4>Example</h4>
                            <p>The Example decoration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('nweaver.footer')
@endsection
@section('script')
    <script >
        $("#navbarul li:eq(2) a").addClass("navactive");
    </script>
@endsection