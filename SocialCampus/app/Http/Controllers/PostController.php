<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use Storage;
use App\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
      $post = new Post;
      $user = $request->user();
      $post->content = $request->content;
      if($user->posts()->save($post) && $request->hasFile('photo')) {
        $photoFile = $request->file('photo');
        $content = file_get_contents($photoFile);
        $disk = Storage::disk('public');
        $fileExt = $photoFile->getClientOriginalExtension();
        $filename = str_random(15).time()."_$post->id_.$fileExt";
        $path = "images/posts/$filename";
        $post->photo = $path;
        $post->save();
        $disk->put($path, $content, 'public');
      }
      Session::flash('success', 'Your post published successfully');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
