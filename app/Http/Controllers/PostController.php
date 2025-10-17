<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function ourfilestore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg',
        ]);


        // Upload Image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Store the post
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;
        $post->save();
        return redirect()->route('home')->with('success', 'Post created successfully!');
    }

    public function editData($id)
    {
        $post = Post::findOrFail($id);
        return view('edit',['ourPost'=>$post]);
    }

    public function updateData($id)
    {
       $post = Post::findOrFail($id);
       return view('edit',['ourPost'=>$post]);
    }

}
