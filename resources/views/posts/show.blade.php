@extends('layouts.app')
@section('title', $post['title'])

<h1>show Post Page</h1>
//if
@section('content')
    @if($post['is_new'])
        <h3> it is a new blog post, using if</h3>
    @elseif(!$post['is_new'])
        <h3> this is an old post, using elseif</h3>
    @endif

    //unless - condition has to be false
    @unless($post['is_new'])
        <h3> this is an old blog post using unless</h3>
            @endunless

            @isset($post['has_comments'])
                <h3>blog has comments</h3>
            @endisset

            <h2>{{ $post['title'] }}</h2>
            @section('content', $post['content'])
            <h2>{{ $post['content'] }}</h2>


