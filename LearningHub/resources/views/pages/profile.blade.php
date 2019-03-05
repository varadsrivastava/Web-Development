
@extends('/layouts/main')
@section('title','|post')
@section('content')
  <div id="particles-js"></div>
  <script src="particles.js"></script>
  <!-- Profile icon header-->
  <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}" />
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.css')}}">
    <div class="card hovercard" style="margin-top:0px;">
      <div class="card-background">
        @if (Auth::user()->ProfileImage===null)
          <img class="card-bkimg" alt="" src="{{ asset('images/profile.jpg') }}">
        @else
          <img class="card-bkimg" alt="" src="{{ asset('images/'.Auth::user()->ProfileImage) }}">
        @endif
      </div>
      <div class="useravatar">
        @if (Auth::user()->ProfileImage===null)
          <img alt="" src="{{ asset('images/profile.jpg') }}">
        @else
          <img alt="" src="{{ asset('images/'.Auth::user()->ProfileImage) }}">
        @endif

        <span class="label label-danger">#{{Auth::user()->newQuery()->where('points','>=',Auth::user()->points)->count()}}</span>
      </div>
      <div class="card-info"> <span class="card-title">{{Auth::user()->name}}</span>

      </div>
    </div>

    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab" role="tabpanel"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          <div class="hidden-xs">Profile</div>
        </button>
      </div>
      {{-- <div class="btn-group" role="group">
        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab" role="tabpanel"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
          <div class="hidden-xs">Notifications</div>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab" role="tabpanel"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
          <div class="hidden-xs">Settings</div>
        </button>
      </div> --}}
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1" role="tabpanel">
          <h3>Welcome to the Profile Page</h3>

          <!--first profile panel-->

          <div class="panel panel-success">
            <div class="panel-heading">My Activity</div>
            <div class="panel-body">

              <button type="button" class="btn btn-primary">
                Points <span class="badge">{{Auth::user()->points}}</span>
              </button>

              <a href="{{route('posts.index')}}" class="btn btn-primary">Your Post</a>

              <!--Questions Asked Button-->
              <a href="{{route('posts.index')}}" class="btn btn-primary">Question Asked</a>

            </div>

          </div>


          <!--first profile panel ends-->

          <!--second profile panel starts-->

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">My Account</h3>
            </div>
            <div class="panel-body">


              <div class="container" style="padding-top: 60px;">
                {!!Form::open(array('route'=>'image.store','files'=>true))!!}
                <h1 class="page-header">Edit Profile</h1>
                <div class="row">
                  <!-- left column -->
                  <div class="sidebar hidden-xs col-md-3 col-sm-3 m-t-40">
                    <div class="text-center" style="width:100%;">
                      @if (Auth::user()->ProfileImage===null)
                        <a href="/profile"><img class="center-block" src="{{ asset('images/profile.jpg') }}" class="image-circle" alt="" style="width:100%;"></a>
                        @else
                        <a href="/profile"><img class="center-block" src="{{ asset('images/'.Auth::user()->ProfileImage) }}" class="image-circle" alt="" style="width:100%;"></a>
                      @endif
                      <h6>Upload a different photo...</h6>
                      <input type="file" name="featured_image" id="featured_image" class="text-center center-block well well-sm" style="width:100%;">
                    </div>
                  </div>
                  <!-- edit form column -->
                  <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                    <div class="alert alert-info alert-dismissable">
                      <a class="panel-close close" data-dismiss="alert">×</a>
                      <i class="fa fa-coffee"></i>
                      Make sure to click on <strong> Save changes </strong>.
                    </div>
                    <h3>Personal info</h3>
                    <input class="btn btn-primary" value="Save Changes" type="submit">
                  </div>
                </div>
                {!!Form::close()!!}
              </div>
            </div>
          </div>
        </div>



        <div class="tab-pane fade in" id="tab2" role="tabpanel">
          <h3>Welcome to Notifications Page</h3>
        </div>



      <div class="tab-pane fade in" id="tab3" role="tabpanel">
        <h3>Welcome to Settings Page</h3>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Privacy Settings</h3>
          </div>
            <div class="panel-body" >
              <div class="container" style="padding-top: 60px;">

              <img src="/images/Capture.png" style="left" height= "120px" width="120px" text-align> We care about your privacy. :) Change here who can see your personal preferences.
              <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                Make sure to click on <strong> Save changes </strong>.
              </div>
                <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-md-3 control-label">Who do you allow to be able to see your PROFILE:</label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Just You
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Public
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Your followers
                  </label>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Who can ask you to reply to a question:</label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Anyone
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Your followers
                  </label>
              </div>
             <div class="form-group">
              <label class="col-md-3 control-label">Who can see your threads and questions:</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Anyone
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Your followers
                </label>
            </div>
           <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input class="btn btn-primary" value="Save Changes" type="button">
                <span></span>
                <input class="btn btn-default" value="Cancel" type="reset">
              </div>
            </div>
          </form>




            </div>
            </div>
            </div>


            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Account Settings</h3>
              </div>
              <div class="panel-body">
                <div class="container" style="padding-top: 60px;">

                <img src="/images/Capture3.png" style="left" height= "120px" width="120px" text-align> Change your Strict Account Settings ,here.
                <div class="alert alert-danger alert-dismissable">
                  <a class="panel-close close" data-dismiss="alert">×</a>
                  <i class="glyphicon glyphicon-exclamation-sign"></i>
                  Make sure to read <strong>Documentation</strong> before clicking on <strong> Delete Account </strong>.
                </div>
                 <form class="form-horizontal" role="form">
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <input class="btn btn-danger" value="Delete Account" type="button">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".docum" type="button" style="left">
                          Documentation
                        </button>
                        <div class="modal fade medal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              Don't delete your account.
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                      <button class="btn btn-warning" data-toggle="modal" data-target=".block" type="button" style="left" >
                        Blocked Users<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span><span class="badge">16</span>
                      </button>
                      <div class="modal fade medal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            These are the blocked users:
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </form>


                </div>
          </div>
          </div>

          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Notification Settings</h3>
            </div>
            <div class="panel-body">
              <div class="container" style="padding-top: 60px;">

              <img src="/images/Capture2.png" style="left" height= "120px" width="120px" text-align> Change your Notification Settings ,here.
              <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-md-3 control-label">Who would you like to see notifications from:</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Public
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Your followers
                </label>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Do you want to get email alerts?:</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">No
                </label>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"></label>
               <div class="col-md-8">
                 <input class="btn btn-success" value="Save Changes" type="button">
                 <span></span>
                 <input class="btn btn-default" value="Cancel" type="reset">
               </div>
             </div>
          </form>
        </div>

            </div>
          </div>
          </div>

        </div>
      </div>

<!-- Profile icon header ends-->
@endsection
