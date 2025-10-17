@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container mx-auto text-center py-16">
        <h1 class="text-4xl font-bold mb-4">Welcome to My Laravel App</h1>
        <p class="text-lg text-gray-700">This is the welcome page of your Laravel application.</p>

        <div class="mt-12 ">
            <h1 class="text-2xl font-bold underline">Want to Post Something?</h1>
            <a href="/create"><button class="px-6 py-2 bg-green-400 mt-5 rounded-xl text-white hover:bg-green-300 duration-300 hover:text-white cursor-pointer">Post a Data</button></a>

        </div>
    </div>

@endsection
