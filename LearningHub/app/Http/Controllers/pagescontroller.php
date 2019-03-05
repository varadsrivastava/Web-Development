<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Category;
use App\User;

class pagescontroller extends Controller
{

  //controller for homepage
  public function home(Request $request){
    //if(!isset($request->sortby))
    $posts = Post::orderBy('views','desc')->paginate(3);

    $postsNew = Post::orderBy('created_at','desc')->paginate(3);
    // $posts=Post::paginate(3);
    //else if( $request->sortby === "featured"){
    //$post = Post::where();
    $comments=Comment::all();
    $users=User::orderBy('points','desc')->paginate(5);
    return view('pages.welcome')->withPosts($posts)->withComments($comments)->withPostsnew($postsNew)->withTopfive($users);
  }

  //controller for forum page
  public function forum(){
    $posts = Post::all();
    $categories=Category::paginate(9);
    $users=User::orderBy('points','desc')->paginate(5);
    return view('pages.forum')->withPosts($posts)->withCategories($categories)->withTopfive($users);
  }
// controller for digital Library
public function library()
{
  return view('pages.library');
}
  //controller for resouces page
  public function resources(){
    $resources = array('Video Lectures','Digital Library','PDF notes','Question Banks','Photos','Documents');
    $users=User::orderBy('points','desc')->paginate(5);
    return view('pages.resources')->withResources($resources)->withTopfive($users);
  }

 public function trynav()
{
  # code...
  $users=User::orderBy('points','desc')->paginate(5);
  return view('partials.nav')->withTopfive($users);
}
public function profile()
{
  # code...
  return view('pages.profile');
}
public function viewquestion()
{
  # code...
  $users=User::orderBy('points','desc')->paginate(5);
  return view('pages.vqa')->withTopfive($users);
}
public function getloginmodal()
{
  return view('modals.login-signup');
}
}
?>
