@extends('layouts.app')

@section('title', 'Blog Posts')
<h1> this is blog home page </h1>
@section('content')
@if(count($posts))
@foreach ($posts as $key => $post)
<div>{{$key}}. {{$post['title']}}</div>
@endforeach
@else
No posts found yet
@endif

@endsection
