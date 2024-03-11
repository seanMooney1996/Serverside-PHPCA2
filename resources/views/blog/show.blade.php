@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20  postHolder">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    <div class="commentsSection">
        @foreach ( $post->comments as $comment)
            <div class="comment">
                <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}<br/>
                  Posted at: {{ date('jS M Y', strtotime($comment->created_at)) }}
                </p>
            </div>
        @endforeach
    </div>

    @if (isset(Auth::user()->id) )
        <a
            href="{{ route('comments.create', ['postId' => $post->id, 'userId' => Auth::id()]) }}"
            class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl commentButton">
            Comment
        </a>
    @endif
</div>

@endsection
