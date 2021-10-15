@extends('layouts.app')

@section('title', 'Blog Posts')
<h1> this is blog home page </h1>
@section('content')
{{-- @if(count($posts))
@foreach ($posts as $key => $post)
<div>{{$key}}. {{$post['title']}}</div>
@endforeach
@else
No posts found yet
@endif --}}

{{-- .................alternative and mixing....................... --}}



@forelse ($posts as $key=> $post )

{{-- including sub view from posts/partials/post --}}
@include('posts.partials.post')
@empty
No Posts found yet
@endforelse

@endsection
