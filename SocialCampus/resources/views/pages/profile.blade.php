@extends('layouts.app')

@section('title', 'User Profile | ')

@section('content')
    <div class="profile-header">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/84/21/d1/8421d1b53991d565a0e07d0d88cc83f2.jpg" alt="" class="cover-photo">
      <div class="follow-container">
        <a class="follow">Followers (102)</a>
        <a class="follow">Following (202)</a>
      </div>
      <div class="navigation clearfix">
        <div class="container">
          <div class="user-name-info">
            <h1 class="full-name">Ruman Saleem</h1>
            <h3 class="username">@zruman</span>
          </div>
          <button class="btn btn-default btn-edit-profile pull-right">Edit Profile</button>
        </div>
      </div>
    </div>
    <div class="container header-container">
      <img src="https://www.gravatar.com/avatar/{{ md5('ruman63@gmail.com') }}?s=200" class="img-responsive profile-pic" >
    </div>


<div class="container">
  <div class="row">
    <div class="col-lg-6 ">
      <ul class="bg-primary ">
        <li>Personal Details </li>
      </ul>
      <ul class="border-right-0">
        <li>Email  </li>
        <li class="pull-right">vyserver@gmail.com </li>
      </ul>
      <ul>
        <li>Phone </li>
        <li class="pull-right">7838700481 </li>
      </ul>
      <ul>
        <li>Date of Birth </li>
        <li class="pull-right">05/10/1998 </li>
      </ul>
      <ul>
        <li> Address</li>
        <li class="pull-right"> Gautampuri</li>
      </ul>

      <div >  <!--edu details-->
        <ul class="bg-primary">
          <li >Education Details </li>

        </ul>
        <ul>
          <li >Course  </li>
          <li class="pull-right" >B.sc</li>
        </ul>
        <ul>
          <li >
            Year </li>
          <li class="pull-right"> 3</li>
        </ul>
        <ul >
          <li >College </li>
          <li class="pull-right"> Acharya Narendra Dev College</li>
        </ul>
      </div> <!--edu details -->
    </div> <!--end -->
    <div class=" col-lg-6  " style="height:300px;overflow-y:scroll;" >
      <ul class="bg-primary">
        <li >Interests  </li>
      </ul>

      @for($i=0;$i<18;$i++)
      <div class="interest">
        <button class="glyphicon glyphicon-remove"></button>
        <img src="https://www.gravatar.com/avatar/{{ md5('ruman63@gmail.com') }}" >

        <p class="text-center">  Name </p>
      </div>
    @endfor



  </div> <!--end interest block-->
</div><!--end row-->
<div>
  <ul class="bg-primary">
    <li >Bio </li></ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi elit, euismod sit amet rhoncus eget, fringilla a augue. Proin sit amet justo at mi ultricies varius. Vivamus congue tortor et accumsan lobortis. Quisque ut ullamcorper dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vel nunc et ligula congue sollicitudin at nec leo. Proin tristique enim et ante commodo gravida. Praesent purus ex, consequat tincidunt aliquet a, convallis quis sem. Aliquam erat volutpat. Donec vehicula, turpis ac fringilla tempus, dui velit feugiat urna, et volutpat eros leo eget quam. Phasellus in semper dui. </p>
</div><!--end bio-->

<div > <!--photos by you-->
  <ul class="bg-primary">
    <li >Photos by you </li></ul>
    <div style="max-height:450px;overflow-y:scroll;">
      @for($i=0;$i<12;$i++)
        <div class="interest pbyu">
        <button class="glyphicon glyphicon-remove"></button>
        <img src="https://www.gravatar.com/avatar/{{ md5('ruman63@gmail.com') }}?s=200" >
      </div>
    @endfor
    <div class="interest pbyu" style="border:none;">

        <button class="glyphicon glyphicon-plus " style="font-size:20px;padding-right:120px;" ></button>
      </div>
    </div>
</div> <!--end  photos by you-->
<div> <!--posts by you-->
  <ul class="bg-primary">
    <li >Posts by you </li></ul>
</div> <!--end posts by you-->
<div> <!--Fav posts-->
  <ul class="bg-primary">
    <li >Favourite Posts </li></ul>
</div> <!--end fav posts-->
</div> <!--end container -->
@endsection
