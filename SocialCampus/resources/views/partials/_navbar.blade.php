<header>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="Social Campus">
          </a>
        </div>
        @if(Auth::check())
          <ul class="nav navbar-nav">
            <li><a href="#"><span class="fa fa-home fa-lg"></span></a></li>
            <li><a href="#" class="has-badge"><span class="fa fa-globe fa-lg"><span class="badge">3</span></span></a></li>
            <li><a href="#" class="has-badge"><span class="fa fa-envelope fa-lg"><span class="badge">99+</span></span></a></li>
          </ul>
          <div class="navbar-right">
            <ul id="profile-navs" class="nav navbar-nav navbar-right">
              <li>
                <a href="{{ route('profile.view', ['id'=>Auth::user()->id]) }}"><span class="user-img">
                  <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}?s=40&d=identicon" alt="User Name"></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-caret-down"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                  <li>
                    <a href="#logout" data-action="submit" data-target="logout-form"><i class="fa fa-sign-out"></i>Logout</a>
                    <form id="logout-form" class="hide" action="{{ route('logout') }}" method="post">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-search-collapse" aria-expanded="false">
              <span class="sr-only">Toggle Search Bar</span>
              <span class="fa fa-search fa-lg"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbar-search-collapse">
            <form class="navbar-form navbar-left">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
                </span>
              </div>
            </form>
          </div>
        @endif
    </div><!-- /.container-fluid -->

  </nav>
</header>
