@extends('nweaver.app')
@section('link')
    <link href="{{url('/css/commuity/create.css')}}" type="text/css" rel="stylesheet" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="fifth-section">
        <div class="container">
            <div class="col-md-9 col-sm-12 col-sm-12">
                @yield('body')
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                @yield('side')
            </div>
        </div>
    </div>
    @include('nweaver.footer')
@endsection