@extends('/layouts/main')
@section('title','|login')
@section('content')
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="col-sm-4">
          <img src="images/desert.png" alt="">
        </div>
        <div class="col-sm-8">
          <div class="modal-body"><form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="modal-heading">
                <h2>Login</h2>
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">Password</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Login
                      </button>

                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          Forgot Your Password?
                      </a><br/>
                      Not a User?
                      <a class="btn btn-link" href="{{ route('register') }}">
                          Register
                      </a>
                  </div>
              </div>
          </form>
          </div>
        </div>
    </div>

  </div>
</div>
@endsection
