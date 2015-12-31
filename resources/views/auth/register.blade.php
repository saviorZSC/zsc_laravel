@extends('nweaver.app')
@section('link')
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="first-section">
        <div class="container">
            <div class="col-md-12">
                <form class="form-horizontal" role="form"  action="{{url('/auth/register')}}" method="POST">
                    {!!csrf_field()!!}
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name:</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" placeholder="name" value="{{old('name')}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-10">
                            <input name="email" type="text" class="form-control" placeholder="email" value="{{old('email')}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-10">
                            <input name="password" class="form-control" type="password" placeholder="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="password_confirmation">Confirm_Password:</label>
                        <div class="col-sm-10">
                            <input name="password_confirmation" class="form-control" type="password" placeholder="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary form-control">Register</button>
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
    @include('nweaver.footer')
@endsection
@section('script')
@endsection
