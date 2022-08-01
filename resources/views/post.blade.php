@extends('layout.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>by
                <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">
                    {{ $post->author->name }}</a> in
                <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">
                    {{ $post->category->name }}</a>
            </p>
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="http://source.unsplash.com/500x400?{{ $post->category->name }}">
                </div>
            @else
            <img class="img-fluid" src="http://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="http://source.unsplash.com/500x400?{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
            <a class="d-block mt-3" href="/posts">Back to post</a>
        </div>
    </div>
</div>

@endsection