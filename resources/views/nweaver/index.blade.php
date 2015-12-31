@extends('nweaver.app')
@section('link')
    <link href="/css/index.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headhandle text-center ">
                    <h1>Great collaboration tools</h1>
                    <p>N-weaver let's share,communication and achieve</p>
                    <span ><a class="btn btn-primary btn-lg" href="{{url('/auth/register')}}"> Sign up for free</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headhandlesecond text-center">
                    <h2>N-weaver,a sinple and pertty tool </h2>
                </div>
            </div>
            <!--Project-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p><span class="glyphicon glyphicon-book iconsize"></span></p>
                    <h4>Project Manage</h4>
                    <span>Unity partner for a gold</span>
                </div>
            </div>
            <!--Manage-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p><span class="glyphicon glyphicon-tasks iconsize"></span></p>
                    <h4>Manage tasks</h4>
                    <span>Assign work to stuff</span>
                </div>
            </div>
            <!--share-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p class="iconsizep"><i class="icon-group iconsize"></i> </p>
                    <h4>Share idea</h4>
                    <span>Share experience,discuss</span>
                </div>
            </div>
            <!--Store and share files-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p><span class="glyphicon glyphicon-folder-open iconsize"></span></p>
                    <h4>Store file</h4>
                    <span>Manage your files</span>
                </div>
            </div>
            <!--Schedule-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p><span class="glyphicon glyphicon-list-alt iconsize"></span></p>
                    <h4>Schedule</h4>
                    <span>The daily plan</span>
                </div>
            </div>
            <!--Process-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p class="iconsizep"><i class="icon-external-link iconsize"></i> </p>
                    <h4>Process</h4>
                    <span>Track the dynamic</span>
                </div>
            </div>
            <!--pay expenses-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p><span class="glyphicon glyphicon-usd iconsize"></span></p>
                    <h4>Pay expenses</h4>
                    <span>Sign up the costs<</span>
                </div>
            </div>
            <!--Tag-->
            <div class="col-md-3 col-sm-4 col-xs-12 iconmargin">
                <div class="text-center">
                    <p><span class="glyphicon glyphicon-tag iconsize"></span></p>
                    <h4>Tags</h4>
                    <span>Search for easy</span>
                </div>
            </div>
        </div>
    </div>
    <div class="third-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headhandlethird text-center">
                    <h3>We have exploit the businesses that have specific service and more work to do.</h3>
                    <p>Even us achievement is great , we also try best to keep going.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headhandlefourth text-center">
                    <h3>The user say :</h3>
                    <h4 class="headchange">N-weaver is a good team tool to complete project.</h4>
                    <span role="separator" class="divider dividerhandle"></span>
                    <div class="row headchangeitem">
                        <div class="col-md-3 col-sm-6 col-xs-6">example</div>
                        <div class="col-md-3 col-sm-6 col-xs-6">example</div>
                        <div class="col-md-3 col-sm-6 col-xs-6">example</div>
                        <div class="col-md-3 col-sm-6 col-xs-6">example</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fifth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headhandlefifth text-center">
                    <h3>Let's join us and improve efficiency</h3>
                    <p>Try N-weaver to work for your team.</p>
                    <a class="bootonset" href="{{url('/auth/register')}}">Sing up for fee</a>
                </div>
            </div>
        </div>
    </div>
    @include('nweaver.footer')
@endsection
@section('script')
    <script>
        $("#navbarul li:first a").addClass("navactive");
    </script>

@endsection