@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content') 
    {{-- @each('posts.partials.posts', $posts, 'post') --}}
    <!-- If with foreach function -->
    @forelse ($posts as $key => $post)
        @include('posts.partials.posts')
    @empty
        <div>No posts found!</div>
    @endforelse

@endsection
