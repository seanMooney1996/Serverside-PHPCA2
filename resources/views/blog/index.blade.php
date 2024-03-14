@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-9 border-b border-gray-200 my-5">
            <h1 class="text-6xl">
                REVIEWS
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class=" w-4/5 m-auto p-2 dispFlexRev">
            <a
                href="/blog/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl goldButtonBig">
                Post a Review
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        @include('layouts.postDisplay')
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span class="float-right">
                     <form
                         action="/blog/{{ $post->slug }}"
                         method="POST">
                        @csrf
                         @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>

                     <a
                         href="/blog/{{ $post->slug }}/edit"
                         class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>
        @endif
    @endforeach

@endsection
