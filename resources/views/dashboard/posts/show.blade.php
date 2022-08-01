@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-start ms-3 my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a class="btn btn-success" href="/dashboard/posts"><i class="bi bi-backspace"></i> Back to all my posts</a>
            <a class="btn btn-primary" href=""><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="javascript:return confirm('Are you sure delete this post?')"><i class="bi bi-trash"></i> Delete</button>
            </form>
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" alt="http://source.unsplash.com/500x400?{{ $post->category->name }}">
                </div>
            @else
                <img class="img-fluid mt-3" src="http://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="http://source.unsplash.com/500x400?{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>
    
@endsection