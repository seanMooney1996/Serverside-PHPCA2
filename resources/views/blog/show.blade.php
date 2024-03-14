@extends('layouts.app')

@section('content')
    <div class="w-3/5 m-auto mt-10 mb-5 text-left">
        <div class="">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
        </div>
    </div>
    @if (session()->has('message'))
        <div class="w-3/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif
    <div class="w-3/5 m-auto postHolder">
        <div class="displayFlexImageHoldShow">
            <img class="imagewidth" src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div class="showReviewTextContent">
            <div class="innerContent">
    <span class="text-white-500">
        By <span class="font-bold italic text-black-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

                <p class="text-xl text-black-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>

                @if (isset(Auth::user()->id) )
                    <a
                        href="{{ route('comments.create', ['postId' => $post->id, 'userId' => Auth::id(),'slug' => $post->slug]) }}"
                        class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl commentButton goldColor">
                        Comment
                    </a>
                @endif
            </div>
        </div>
        <div class="commentsSection">
            <div class="commentRight">
            </div>
            <div class="commentLeft">
                @foreach ( $post->comments as $comment)
                        <div class="commentInBubble">
                        <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}<br/>
                                Posted at: {{ date('jS M Y', strtotime($comment->created_at)) }}
                            </p>
                        </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
