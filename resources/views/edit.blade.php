@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container mx-auto max-w-md py-16 px-4">
        <h1 class="text-4xl font-bold mb-8 text-center">Edit Post</h1>

        <form method="POST" action="{{ route('update',$ourPost->id) }}" class="bg-white shadow-md rounded-lg p-6 space-y-4" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Post Name</label>
                <input type="text" name="name" value="{{ $ourPost->name }}" id="name" placeholder="Enter post name"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
            @error('name')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            <!-- Description -->
            <div>
                <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
                <input value="{{ $ourPost->description}}" name="description" id="description" placeholder="Enter description"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 resize-none"
                    rows="4"></input>
            </div>
            @error('description')
                <p class="text-red-500">{{$message}}</p>
            @enderror

            <!-- Image -->
            <div>
                <label for="image" class="block text-gray-700 font-medium mb-1">Upload Image</label>
                <input type="file" name="image" id="image"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button type="submit"
                    class="px-6 py-2 bg-green-400 rounded-xl text-white hover:bg-green-300 duration-300 cursor-pointer">
                    Edit Post
                </button>
            </div>
        </form>

        <!-- Back button -->
        <div class="text-center mt-6">
            <a href="/">
                <button class="px-6 py-2 bg-gray-400 rounded-xl text-white hover:bg-gray-300 duration-300 cursor-pointer">
                    Back to Home
                </button>
            </a>
        </div>
    </div>
@endsection
