@extends('layouts.app')

@section('content')
<div class="w-1/2 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Post a Review
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-1/2 m-auto">
    <form class="createPostClass"
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block w-full h-15 text-6xl outline-none textboxColorGrey">

        <textarea
            name="description"
            placeholder="Description..."
            class="py-5 bg-transparent block w-full h-50 text-xl outline-none textboxColorGrey descBox"></textarea>

        <div class="bg-grey-lighter pt-7">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer bg-white">
                <span class="mt-2 text-base leading-normal text-black">
                    Select a file
                </span>
                <input
                    type="file"
                    name="image"
                    class="hidden"
                    accept="image/jpg">
            </label>
        </div>

        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl goldColor">
            Submit Post
        </button>
    </form>
</div>

@endsection
