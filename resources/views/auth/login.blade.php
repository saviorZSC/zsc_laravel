@extends('nweaver.app')
@section('link')
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 column">
                    <form class="form-horizontal" role="form"  action="{{url('/auth/login')}}" method="post">
                        {!!csrf_field()!!}
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" value="{{old('email')}}" name="email" class="form-control" id="inputEmail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remenber" />Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </div>
                        </div>
                    </form>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul style="color:red;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('nweaver.footer')
@endsection
@section('script')
@endsection