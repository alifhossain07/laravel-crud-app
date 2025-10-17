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
@if(session('success'))
<h2 class="text-green-600">{{session('success')  }}</h2>
@endif

    </div>

    <div class="w-9/12 mx-auto">
        <div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">

          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">ID</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
              <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Image</th>
              <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
            </tr>
          </thead>
          <tbody>

@foreach ($posts as $post)
          <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$post->id}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$post->name}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$post->description}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <img src="{{ asset('images/' . $post->image) }}" alt="Post Image" class="w-16 h-16 object-cover mx-auto">
              </td>
               <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <a class="px-4 py-2 bg-green-400 rounded-full" href="{{ route('edit',$post->id) }}">Edit</a>
                <a class="px-4 py-2 bg-red-400 rounded-full" href="{{ route('delete',$post->id) }}">Delete</a>
            </tr>
            @endforeach





          </tbody>
        </table>
         {{ $posts->links()}}
      </div>
    </div>
  </div>
</div>
    </div>

@endsection
