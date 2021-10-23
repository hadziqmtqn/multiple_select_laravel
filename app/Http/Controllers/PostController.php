<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::get();

        return view('index',compact('data'));
    }

    public function postCreate()
    {
        return view('post');
    }

    public function postData(Request $request)
    {
        $input = $request->all();

        Post::create($input);

        dd('Post created successfully.');
    }

    public function edit($id)
    {
        $dt = Post::find($id);
        return view('edit',compact('dt'));
    }

    public function postUpdate(Request $request,$id)
    {
        $input = $request->all();

        Post::where('id',$id)->update($input);

        dd('Post updated successfully.');
    }
}
