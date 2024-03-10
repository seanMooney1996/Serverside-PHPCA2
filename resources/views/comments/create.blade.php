@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                 Comment on this blog
            </h1>
        </div>
    </div>


    <div class="w-4/5 m-auto pt-20">
        <form
            action="{{ route('comments.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <label>
     <textarea
    name="content"
    placeholder="Say something..."
    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
            </label>

            <input type="hidden" name="postId" value="{{ $postId }}">
            <input type="hidden" name="userId" value="{{ $userId }}">

            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Comment
            </button>
        </form>
    </div>

@endsection
