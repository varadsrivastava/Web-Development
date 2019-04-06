<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="css/login.css" media="screen" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>



  <body style="height:1100px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="#">NOTAM</a>
    <img src="images/aai.png" alt="Logo" style="width:40px;">
  </a>
  <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="home_logged.php">Home</a>
  </li>
  <li class="navbar-nav">
    <a class="nav-link" href="notam_manage.php">NOTAM</a>
  </li>
  <li class="navbar-nav">
    <a class="nav-link" href="notam_history.php">History</a>
  </li>
  </ul>
  <ul class="nav navbar-nav ml-auto">
      <li><a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i> SignOut</a></li>
      <li><a class="nav-link active" href="javascript:void(0)"><i class="fas fa-user-circle"></i> Profile</a></li>
    </ul>
    </nav>

    <div class="container" style="padding-top: 60px;">
      <h1 class="page-header">Edit Profile</h1>
      <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="text-center">
            <img src="images/prof.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Upload a different photo...</h6>
            <input type="file" class="text-center center-block well well-sm">
          </div>
        </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i>
        Enter the details <strong> carefully </strong>. Your changes will be monitored and scrutinized.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="Varad" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="Srivastava" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Clearance Level:</label>
          <div class="col-lg-8">
            <input class="form-control" value="ATC Level 1" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="@gmail.com" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Time Zone:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control">
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
                <option value="Arizona">(GMT-07:00) Arizona</option>
                <option value="Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
                <option value="Central Time (US & Canada)" selected="selected">(GMT-06:00) Central Time (US & Canada)</option>
                <option value="Eastern Time (US & Canada)">(GMT-05:00) Eastern Time (US & Canada)</option>
                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="user" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="123" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="123" type="password">
          </div>
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





<!--airmen login-->
 <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header text-center">
         <i class="fas fa-plane"></i>
         <h4 class="modal-title w-100 font-weight-bold">AIRMAN LOGIN</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body mx-3">
         <div class="md-form mb-5">
           <i class="fas fa-envelope prefix grey-text"></i>
           <input type="text" id="airmen-username" class="form-control validate" placeholder="Username">
         </div>

         <div class="md-form mb-4">
           <i class="fas fa-lock prefix grey-text"></i>
           <input type="password" id="airmen-pass" class="form-control validate" placeholder="Password">
         </div>

       </div>
       <div class="modal-footer d-flex justify-content-center">
         <button class="btn btn-default">Login</button>
       </div>
     </div>
   </div>
 </div>

</body>
