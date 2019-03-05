
<div class="navigation-bar">
    <div class="head-cover">
      <img class="logo" src="/images/t_hub_logo.png">
      <div class="logo-text">The<br>Learning<br>Hub</div>
    </div>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
          <ul class="nav  navbar-nav">
            <li><a class="active" href="/"><span class="fa fa-home"></span> Home</a></li>
          </ul>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav  navbar-nav navbar-left">
            <li><a href="/forum"><span class="fa fa-pencil-square-o"></span> Forum</a></li>
            <li><a href="/resources"><span class="fa fa-download"></span> Resources</a></li>
            <li><a href="{{route('question.create')}}"><span class="fa fa-quora"></span> Q/A</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a>
              <span class="fa fa-search"></span></a>
            </li>
            <li><a href="/notifications"><span class="fa fa-bell"></span></a></li>
            @if (!Auth::check())
              <li><a href="{{route('login')}}"><span class="fa fa-user-circle"></span></a></li>
            @endif
            @if (Auth::check())
              @if (Auth::user()->ProfileImage===null)
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/#"><img class="nav-profile" src="{{asset('images/profile.jpg')}}"><span class="caret"></span></a>
              @else
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/#"><img class="nav-profile" src="{{asset('images/'.Auth::user()->ProfileImage)}}"><span class="caret"></span></a>
              @endif
              <ul class="dropdown-menu">
                <li><a href="/profile"><span class="fa fa-user-o p-t-5 p-r-10"></span>Profile</a></li>
                <li><a href="{{route('posts.index')}}"><span class="fa fa-file-text-o p-t-5 p-r-10"></span>My posts</a></li>
                <li><a href="/profile"><span class="fa fa-gear p-t-5 p-r-10"></span>Settings</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out p-t-5 p-r-10"></span>Logout</a></li>
                 <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
                  {{csrf_field() }}
                </form>
              </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
