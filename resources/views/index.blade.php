@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Welcome Yee Maidenless Tarnished
            </h1>
            <a
                href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="py-0 displayFlexIndex">
    <div class="holdMiddleIndex1">
    <div class="imageHoldIndexPage">
        <img src="images/EldenCharPNG.png" width="700" alt="">
    </div>

    <div class="m-auto text-left w-4/5 block textBoxColor1">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to be a better web developer?
        </h2>

        <p class="py-8 text-gray-500 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos
            molestias porro vero. Vel alias.
        </p>

        <a
            href="/blog"
            class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl goldButton">
            Find Out More
        </a>
    </div>
    </div>
</div>

<div class="text-center p-15 bg-black text-white backgroundBlack">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
    <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
    <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
    <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
</div>

<div class="text-center py-15 post">
    @php
        $post = $posts->first();
    @endphp
@include('layouts.postDisplay')
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">

    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
    </div>
</div>
@endsection
