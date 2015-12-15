@extends('nweaver.commuity.model')
@section('body')
    <h1>{{ $article->title }}</h1>
    <h5>{{ $article->publish_time }}</h5>
    <hr>
    {!! $article->content !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
@endsection
