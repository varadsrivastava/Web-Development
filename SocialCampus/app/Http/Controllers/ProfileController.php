<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view(Request $request){
      if(!$request->has('id'))
        abort('400');
      $profile = UserProfile::findOrFail($request->id);
      return view('pages.profile')->withProfile($profile);
    }
}
