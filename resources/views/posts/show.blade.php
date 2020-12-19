@extends('layouts.app')

@section('title', $post['title'])

@section('content')
    @if($post['is_new'])
        <div> A new blog post using if!</div>
    @else
        <div>Blog post is old !</div>
    @endif

    @unless($post['is_new'])
        <div>It is an old post.. using unless.</div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

    @isset(($post['has_comments']))
        <div> The posts has some comments using isset..</div>
    @endisset
@endsection