<?php
include('login.php');
include('login2.php');
// Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home_logged.php");
}
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css" media="screen" />
  </head>

  <body style="height:800px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="#">NOTAM</a>
    <img src="images/aai.png" alt="Logo" style="width:40px;">
  </a>
  <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" href="javascript:void(0)">Home</a>
  </li>

</ul>
  <ul class="nav navbar-nav ml-auto">
      <li><a class="nav-link " href="javascript:void(0)" data-toggle="modal" data-target="#modalLoginForm"><i class="fas fa-plane"></i> AIRMAN </a></li>
    </ul>
    </nav>

    <div class="container" >
      <h1>Welcome to NOTAM.</h1>
    </div>


        <div class="container mt-4">
              <div class="row">
                  <div class="col">
                    <div class="sidenav">
                      <div class="login-main-text">
                        <h2> NOTAM Application<br> Login Page</h2>
                        <p>Login or register from here to access.</p>
                      </div>
                    </div>

                    <div class="card">

                    </div>
                  </div>
                  <div class="col">
                    Welcome to NOTAM.
                    <img src="images/aai.png" alt="">
                    Better Flights.
                  </div>
              </div>
              <div class="row">
                  <div class="col">

                  </div>

                  <div class="col-md-6 mb-4">
                                  <div class="card indigo form-white" id=login>
                                      <div class="card-body">
                                          <h3 class="text-center white-text py-3"><i class="fa fa-user"></i> Login:</h3>
                                          <!--Body-->
                                          <form action="" method="post">
                                          <div class="md-form">
                                              <i class="fa fa-envelope prefix white-text"></i>
                                              <input type="text" id="name" name="username" class="form-control" placeholder="Username">

                                          </div>
                                          <div class="md-form">
                                              <i class="fa fa-lock prefix white-text"></i>
                                              <input type="password" id="password" name="password" class="form-control" placeholder="Password">

                                          </div>
                                          <div class="text-center">
                                              <button name="submit" class="btn btn-outline-white waves-effect waves-light">next</button>
                                          </div>
                                        </form>
                                      </div>
                                  </div>
                    </div>
              </div>
          </div>


     <!--airmen login-->
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="post">
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
                <input type="text" id="airmen-username" name="a_username" class="form-control validate" placeholder="Username">
              </div>

              <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="password" id="airmen-pass" name="a_password" class="form-control validate" placeholder="Password">
              </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button name='submit2' class="btn btn-default">Login</button>
            </div>
          </form>
          </div>
        </div>
      </div>





  </body>
</html>
