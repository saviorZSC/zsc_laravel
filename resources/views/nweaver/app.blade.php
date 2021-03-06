<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>N-weaver is a application of teamwork</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('/css/navAndFooter.css')}}" rel="stylesheet" type="text/css" />
    @yield('link')
</head>
<body>
@yield('content')
<script src="{{url('/javascript/jquery-2.1.4.min.js')}}" ></script>
<script src="{{url('/javascript/bootstrap.min.js')}}" ></script>
@yield('script')
</body>
</html>