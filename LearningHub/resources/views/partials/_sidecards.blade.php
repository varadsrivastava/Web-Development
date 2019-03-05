<div class="sidebar hidden-xs col-sm-3 m-t-40">
  @if (Auth::check())

    <div class="profile">
      <h4 class="card-name text-center">Your Profile</h4>
      <div class="profile-img">
        <a href="/profile">
          @if (Auth::user()->ProfileImage===null)
            <img class="center-block" src="{{ asset('images/profile.jpg') }}" alt="">
            @else
            <img class="center-block" src="{{ asset('images/'.Auth::user()->ProfileImage) }}" alt="">
          @endif
        </a>
        <h5 style="text-align:center"><strong>{{Auth::user()->name}}</strong></h5>
      </div>
      <div class="row">
        <div class="captions col-xs-3 col-xs-offset-2">
          <h5><span>Rank</span><h5>
            <h5><span>Points</span><h5>
              <h5><span>User Category</span><h5>
              </div>
              <div class="captions-value col-xs-3 col-xs-offset-2">
                <h5><span>#{{Auth::user()->newQuery()->where('points','>=',Auth::user()->points)->count()}}</span><h5>
                  <h5><span>{{Auth::user()->points}}</span><h5>
                    <h5><span>
                      @if (Auth::user()->points<20)
                        Bronze
                      @elseif (Auth::user()->points<100)
                        Silver
                      @else
                        Gold
                      @endif
                    </span><h5>
                    </div>
                  </div>
                </div>
  @endif

<div class="topmember m-t-50">

  <h4 class="card-name text-center">Top members</h4>
  @foreach($topfive as $user)
    <div class="row m-t-5 m-b-5">
      <div class="member-pic col-xs-4">
        @if ($user->ProfileImage===null)
          <img src="{{asset('images/profile.jpg')}}" alt="">
          @else
          <img src="{{asset('images/'.$user->ProfileImage)}}" alt="">
        @endif
      </div>
      <div class="member-name col-xs-4 m-t-15">
        <p>{{$user->name}}</p>
      </div>
      <div class="member-points col-xs-4 m-t-15">
        <p>{{$user->points}}</p>
      </div>
    </div>
  @endforeach
</div>
<div class="hots m-t-50">
<h4 class="card-name text-center">HOT Network Questions</h4>
<div class="questions m-t-10">
  <ul class="p-l-20">
    <li><h5>who is the President of India?</h5></li>
    <li><h5>who is the Founder of Social Campus?</h5></li>
    <li><h5>who is the Founder of The Learning Hub?</h5></li>
    <li><h5>what do you mean?</h5></li>
    <li><h5>why?</h5></li>
  </ul>
</div>
</div>
</div>
