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
@if($loop->even)
<div>{{$key}}.{{$post['title']}}</div>
@else
<div style="background-color:silver">{{$key}}.{{$post['title']}}</div>
{{-- else has to be renamed as empty --}}
@endif
@empty
No Posts found yet
@endforelse

@endsection
