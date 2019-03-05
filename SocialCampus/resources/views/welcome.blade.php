@extends('layouts.landing')
@section('title', 'Login | ')
@section('content')
  <div class="container">
    <div class="brand-logo-big">
      <img src="{{ asset('images/logo/logo.svg') }}" alt="">
    </div>
      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
        <div id="login" class="container-boxed toggle active">
            <h2 class="m-b-30">Login to Your Account</h2>
            <form class="clearfix" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="email" name="email" placeholder="someone@domain.com" class="form-control">
                </div>
              </div>
              <div class="form-group {{ $errors->has('email') || $errors->has('password') ? 'has-error' : ''}}">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                @if($errors->has('email'))
                  <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="checkbox pull-left">
                <label>
                  <input type="checkbox" name="remember" value="1">
                  Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-block btn-primary btn-lg">Login</button>
              <p class="m-t-20">Don't have an acount? <a href="#register" data-rel="toggle-container">Register here</a></p>
            </form>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <div id="register" class="container-boxed toggle">
            <div class="toggle-container">
              <h2 class="m-b-30">Create New Account</h2>
              <ul class="nav nav-pills" role="tablist" id="user-type-tabs" style="margin-bottom:15px">
                <li role="presentation" class="active"><a href="#user-form" aria-controls="user-form" role="tab" data-toggle="tab">User</a></li>
                <li role="presentation"><a href="#college-form" aria-controls="college-form" role="tab" data-toggle="tab">College</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="user-form">
                  <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="form-group col-sm-6 {{$errors->has('fname')? 'has-error' : ''}}">
                        <input type="text" placeholder="First Name" name="fname" required class="form-control" value="{{ old('fname') }}"/>
                        @if($errors->has('fname'))
                          <span class="help-block">{{ $errors->first('fname') }}</span>
                        @endif
                      </div>
                      <div class="form-group col-sm-6 {{$errors->has('lname')? 'has-error' : ''}}">
                        <input type="text" placeholder="Last Name"  name="lname" required class="form-control" value="{{ old('lname') }}"/>
                        @if($errors->has('lname'))
                          <span class="help-block">{{ $errors->first('lname') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                      <input type="email" placeholder="Email" name="email" required class="form-control" value="{{ old('email') }}"/>
                      @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                    <div class="form-group {{$errors->has('occupation')? 'has-error' : ''}}">
                      <select name="occupation" required class="form-control">
                        <option {{old('occupation')== '0' || old('ocupation') === null ? 'selected' : ''}} value="">-- Tell us who you are? --</option>
                        <option {{old('ocupation') == 's' ? 'selected' : ''}} value="s">Student</option>
                        <option {{old('ocupation') == 't' ? 'selected' : ''}} value="t">Teacher</option>
                      </select>
                      @if($errors->has('occupation'))
                        <span class="help-block">{{ $errors->first('occupation') }}</span>
                      @endif
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6 {{$errors->has('password')? 'has-error' : ''}}">
                        <input type="password" placeholder="Password" name="password" required class="form-control"/>
                        @if($errors->has('password'))
                          <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                      <div class="form-group col-sm-6 {{$errors->has('password_confirmation')? 'has-error' : ''}}">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required class="form-control"/>
                        @if($errors->has('password_confirmation'))
                          <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6 {{$errors->has('dob')? 'has-error' : ''}}">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control"  value="{{ old('dob') }}"/>
                        @if($errors->has('dob'))
                          <span class="help-block">{{ $errors->first('dob') }}</span>
                        @endif
                      </div>
                      <div class="form-group col-sm-6 {{$errors->has('gender')? 'has-error' : ''}}">
                        <label for="gender" class="label-control">Gender:</label>
                        <br>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="m" {{old('gender') === null || old('gender') == 'm' ? 'checked' : ''}}>
                          Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="f"  value="{{ old('gender') == 'f' ? 'checked' : '' }}">
                          Female
                        </label>
                        @if($errors->has('gender'))
                          <span class="help-block">{{ $errors->first('gender') }}</span>
                        @endif
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                  </form>
                </div>

                <div role="tabpanel" class="tab-pane" id="college-form">
                  <form>
                    <div class="form-group">
                      <input type="text" placeholder="College Name" required class="form-control"/>
                    </div>
                    <div class="form-group">
                      <select placeholder="University" required class="form-control">
                        <option selected>-- Select University --</option>
                        <option value="0">Delhi University</option>
                        <option value="1">Chandigarh University</option>
                        <option value="2">Pune University</option>
                        <option value="3">Central University</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Email" required class="form-control"/>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <input type="password" placeholder="Password" required class="form-control"/>
                      </div>
                      <div class="form-group col-sm-6">
                        <input type="password" placeholder=" Confirm password" required class="form-control"/>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                  </form>
                </div>
              </div><!--Tab Content-->
              <p class="m-t-20">Already have an account? <a href="#login" data-rel="toggle-container">Login</a></p>

            </div>
          </div>
        </div>
      </div><!--End of Column -->
    </div>
  @endsection
  @section('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        $("a[data-rel=toggle-container]").click(function(event) {
          event.preventDefault();
          $("#register").toggleClass('active');
          $("#login").toggleClass('active');
        });
      });
    </script>
  @endsection
