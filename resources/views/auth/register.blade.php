@extends('nweaver.app')
@section('link')
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
@endsection
@section('content')
    @include('nweaver.nav')
    <div class="first-section">
        <div class="container">
            <div class="col-md-6">
                <form action="/auth/register" method="POST">
                    {!!csrf_field()!!}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" type="text" placeholder="name" value="{{old('name')}}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" type="text" placeholder="email" value="{{old('name')}}" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input name="password" type="password" placeholder="password" />
                    </div>
                    <div class="form-group">
                        <label for="password"_confirmation>Confirm_Password:</label>
                        <input name="password_confirmation" type="password" placeholder="password" />
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
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