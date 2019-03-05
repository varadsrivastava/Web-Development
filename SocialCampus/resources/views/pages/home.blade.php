@extends('layouts.app')
@section('title', 'Home Page | ')
@section('content')
  <div class="container">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <form class="post-form clearfix" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
          <div class="form-content">
            <img class="user-img" src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}?s=80&d=identicon" alt="">
              {{ csrf_field() }}
              <div class="form-input">
                <textarea id="post-content" rows="1" class="form-control" type="text" name="content" placeholder="Write something..."></textarea>
                <div id="post-photo-preview" class="photo-preview">
                </div>
                <div class="form-buttons clearfix">
                  <button type="submit" class="btn btn-primary btn-sm">Share</button>
                  <input type="file" name="photo" id="post-photo"class="pull-left input-sm">
                  <label for="post-photo"><span><i class="fa fa-photo"></i></span>Add Photo</label>
                </div>
              </div>
          </div>
        </form>
      </div>
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
      <ul class="posts-list">
        @foreach($posts as $i => $post)
          <li class="post-item m-b-20">
            <div class="post-container">
              <div class="post-head clearfix">
                <span class="user-img">
                  <img src="https://www.gravatar.com/avatar/{{ md5(strtolower($post->user->email)) }}?s=40&d=identicon" alt="">
                </span>
                <h5 class="users-name"><a href="{{ route('profile.view', ['id'=>$post->user_id]) }}">{{$post->user->fname." ".$post->user->lname}}</a><i class="online-dot"></i></h5>
                <ul class="nav nav-pills pull-right">
                  @if(Auth::user()->id === $post->user_id )
                    <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                  @endif
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                      @if( Auth::user()->id === $post->user_id )
                        <li><a href="#"><i class="fa fa-trash"></i>Delete</a></li>
                      @endif
                      <li><a href="#"><i class="fa fa-ban"></i>Report</a></li>
                    </ul>
                  </li>
                </span>
              </div>
              <div class="post-body">
                <p>
                  {!! $post->content !!}
                </p>
                @if(isset($post->photo))
                  <div class="post-photo">
                    <img src="{{ $post->photo }}" alt="">
                  </div>
                @endif
              </div>
              <div class="post-footer p-t-5">
                <div class="clearfix m-b-5">
                  <span class="pull-left">{{ $post->likes()->count() }} Likes</span>
                  <span class="pull-left m-l-10">{{ $post->comments()->count() }} Comments</span>
                  {{-- Right Aligned --}}
                  {{-- <span class="pull-right"> 2 Shares </span> --}}
                </div>
                <ul class="footer-btns">
                  <li>
                    @php($liked = $post->likes->contains('user_id', Auth::user()->id))
                    <button href="#like" data-action="submit" data-target="like-{{$i}}" {{ $liked ? 'disabled' : '' }}><i class="fa fa-heart"></i><span>{{ $liked ? 'Liked' : 'Like' }}</span></button></li>
                    <form id="like-{{$i}}" class="hide" action="{{ route('likes.store') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                    </form>
                  <li>
                    <a role="button" aria-controls="#coment-box-{{$i}}" aria-expanded="false" data-toggle="collapse" href="#comment-box-{{$i}}"><i class="fa fa-comment"></i><span>Comment</span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-share"></i><span>Share</span></a></li>
                </ul>
              </div>
              <div id="comment-box-{{$i}}" class="comment-box collapse">
                <form class="comment-form" action="{{ route('comments.store') }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5(strtolower(Auth::user()->email))}}?s=40&d=identicon" alt=""></span>
                  <input type="text" name="comment" placeholder="Write a comment..." class="form-control input-sm">
                  <button type="submit" role="button" class="btn btn-primary btn-sm">Comment</button>
                </form>
                <ul class="comments-list">
                  @foreach ($post->comments as $key => $comment)
                    <li class="comment">
                      <div class="comment-head">
                        <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5(strtolower($comment->user->email))}}?s=40&d=identicon"></span>
                        <span class="user-name">
                          <a href="{{ route('profile.view', ['id'=>$comment->user->id]) }}">{{$comment->user->fname." ".$comment->user->lname}}</a>
                          <span> 3 hours ago </span>
                        </span>
                      </div>
                      <div class="comment-body"><span class="comment-text">
                        {!! $comment->comment !!}
                      </span></div>
                    </li>
                  @endforeach
                  <li class="comment">
                    <div class="comment-head">
                      <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5('maxwell@gmail.com')}}?s=40"></span>
                      <span class="user-name">
                        <a href="#">Nix Maxwell</a>
                        <span> 3 hours ago </span>
                      </span>
                    </div>
                    <div class="comment-body"><span class="comment-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam est voluptas provident repellendus eaque, harum hic, perferendis impedit praesentium similique.
                    </span></div>
                  </li>
                  <li class="comment user">
                    <div class="comment-head">
                      <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5('ruman63@gmail.com')}}?s=40"></span>
                      <span class="user-name">
                        <a href="#">Ruman Saleem</a>
                        <span class="label label-primary">AUTHOR</span>
                        <span class="time">Just now</span>
                      </span>
                    </div>
                    <div class="comment-body"><span class="comment-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam est voluptas provident repellendus eaque, harum hic, perferendis impedit praesentium similique.
                    </span></div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        @endforeach
        @for($i=0;$i<6;$i++)
          <li class="post-item m-b-20">
            <div class="post-container">
              <div class="post-head clearfix">
                <span class="user-img">
                  <img src="https://www.gravatar.com/avatar/{{ md5('ruman63@gmail.com') }}?s=40" alt="">
                </span>
                <h5 class="users-name"><a href="{{ route('profile.view', ['id'=>0]) }}">Ruman Saleem</a><i class="online-dot"></i></h5>
                <ul class="nav nav-pills pull-right">
                  <li><a href="#"><i class="fa fa-user-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-trash"></i>Delete</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i>Report</a></li>
                    </ul>
                  </li>
                </span>
              </div>
              <div class="post-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, eligendi.
                  <a href="#">alink</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, sunt.
                  <a href="#">#Hashtag</a> Lorem ipsum dolor sit amet. <a href="#">@mention</a>
                </p>
              </div>
              <div class="post-footer p-t-5">
                <div class="clearfix m-b-5">
                  <span class="pull-left"> 9 Likes </span>
                  <span class="pull-left m-l-10"> 12 Comments </span>
                  {{-- Right Aligned --}}
                  <span class="pull-right"> 2 Shares </span>
                </div>
                <ul class="footer-btns">
                  <li><a href="#"><i class="fa fa-heart"></i><span>Like</span></a></li>
                  <li>
                    <a role="button" aria-controls="#coment-box-{{$i}}" aria-expanded="false" data-toggle="collapse" href="#comment-box-{{$i}}"><i class="fa fa-comment"></i><span>Comment</span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-share"></i><span>Share</span></a></li>
                </ul>
              </div>
              <div id="comment-box-{{$i}}" class="comment-box collapse">
                <form class="comment-form">
                  <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5('ruman63@gmail.com')}}?s=40" alt=""></span>
                  <input type="text" name="comment" placeholder="Write a comment..." class="form-control input-sm">
                  <button type="submit" role="button" class="btn btn-primary btn-sm">Comment</button>
                </form>
                <ul class="comments-list">
                  <li class="comment">
                    <div class="comment-head">
                      <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5('maxwell@gmail.com')}}?s=40"></span>
                      <span class="user-name">
                        <a href="#">Nix Maxwell</a>
                        <span> 3 hours ago </span>
                      </span>
                    </div>
                    <div class="comment-body"><span class="comment-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam est voluptas provident repellendus eaque, harum hic, perferendis impedit praesentium similique.
                    </span></div>
                  </li>
                  <li class="comment user">
                    <div class="comment-head">
                      <span class="user-img"><img src="https://www.gravatar.com/avatar/{{md5('ruman63@gmail.com')}}?s=40"></span>
                      <span class="user-name">
                        <a href="#">Ruman Saleem</a>
                        <span class="label label-primary">AUTHOR</span>
                        <span class="time">Just now</span>
                      </span>
                    </div>
                    <div class="comment-body"><span class="comment-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam est voluptas provident repellendus eaque, harum hic, perferendis impedit praesentium similique.
                    </span></div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        @endfor
      </ul>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h5>Followers ({{ Auth::user()->followers()->count() }})</h5>
      </div>
      <div class="panel-body">
        <ul>
          @foreach (Auth::user()->followers as $follower)
            <li>{{ $follower->fname." ".$follower->lname }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    function readImage(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        var imageContainer = $('#post-photo-preview');
        var image = imageContainer.find('img');
        if( image !== null){
          image.remove();
        }
        reader.onload = function (e) {
          var img = $('<img>').attr('src', e.target.result);
          img.appendTo("#post-photo-preview");
          $('#post-photo-preview').addClass('has-image');
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#post-photo").change(function() {
      readImage(this);
    });
  </script>
@endsection
