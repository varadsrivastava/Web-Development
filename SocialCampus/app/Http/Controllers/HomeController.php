<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function index(){
    $posts = Post::all();
    $posts = $posts !==null ? $posts : collect([]);
    return view('pages.home')->withPosts($posts);
  }
  public function viewProfile($id)
  {
    return view('pages.profile');
  }
}
