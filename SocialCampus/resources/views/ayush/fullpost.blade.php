@extends('layouts.app')
@section('title', 'Full Post | ')
@section('content')

<div class="page_container col-lg-offset-2 col-lg-8 col-lg-offset-2">
    <div class = "post_container">
      <hr>
      <div class = "post">
        <div class="title_details row">
            <div class="user_profile col-sm-1">
                <img src="images/userimage.jpg" alt="">
            </div>
            <div class="col-sm-9">
              <div class="post_details">
                <td>user posted under title,desription .................................................</td>
              </div>
            </div>
            <div class="col-sm-offset-1 col-sm-1">
              <span class="fa fa-user-plus"></span>
            </div>
        </div>
        <hr>
        <div class="caption row">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <hr>
        <div class="caption row">
          <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        </div>
        <div class="likebox">
          <div class="well">
            <div class="like_container row">
              <div class="like col-xs-2 row">
                <div class="col-xs-2">
                  <span class="glyphicon glyphicon-heart"></span>
                </div>
                <div class="col-xs-4">
                  <h5>123</h5>
                </div>
                <div class="col-xs-2">
                  <span class="glyphicon glyphicon-share-alt"></span>
                </div>
                <div class="col-xs-3">
                  <h5>123</h5>
                </div>
              </div>
              <div class="like col-xs-1">
                <div class="col-xs-2">
                  <span class="glyphicon glyphicon-comment"></span>
                </div>
                <div class="col-xs-4">
                  <h5>123</h5>
                </div>
              </div>
              <div class="like col-xs-1" style="float: right;">
                <div class="col-xs-3" style="float:right;">
                  <span class="glyphicon glyphicon-star"></span>
                </div>
                <div class="col-xs-3" style="float:right;">
                  <span class="glyphicon glyphicon-flag"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="well">
          <form class="comment-form" method="get">
            <p class="flex1"><input type="text" style="padding-bottom:0px;" class="form-control flex2" placeholder="Leave a comment...">
             <button type="submit" class="btn"><span class="fa fa-angle-double-right"></span></button>
           </p>
          </form>
        </div>
        <hr>
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                    <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <hr>

        <!-- Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                    <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <!-- Nested Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nested Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <!-- End Nested Comment -->
            </div>
            <hr>
        </div>
      </div>
    </div>
  </div>

@endsection
