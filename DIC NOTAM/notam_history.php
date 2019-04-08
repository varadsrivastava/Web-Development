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

    <link rel="stylesheet" href="css/login.css" media="screen" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>

  <body style="height:1500px">
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
    <a class="nav-link active" href="javascript:void(0)">History</a>
  </li>
</ul>
  <ul class="nav navbar-nav ml-auto">

      <li><a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i> SignOut</a></li>
      <li><a class="nav-link" href="profile.php"><i class="fas fa-user-circle"></i> <?php echo $user_check; ?></a></li>
    </ul>
    </nav>

    <div class="container" >
      <h1>Welcome to NOTAM.</h1>
    </div>



  <div class="card">
      <div class="card-header bg-primary" >NOTAM History</div>



      <table class="table table-striped">
        <div class="table responsive">
            <thead>
                <tr>
                  <th>id</th>
                  <th>notam_no</th>
                  <th>notam_type</th>
                  <th>cancel_no</th>
                   <th>aftn</th>
                   <th>date</th>
                   <th>fir</th>
                   <th>qcode</th>
                   <th>traffic</th>
                   <th>purpose</th>
                   <th>scope</th>
                   <th>lower</th>
                   <th>upper</th>
                   <th>lat</th>
                   <th>loc</th>
                   <th>validf</th>
                   <th>validt</th>
                   <th>schedule</th>
                   <th>text</th>
                </tr>
            </thead>
            <tbody>

            <?php
            

            $result = mysqli_query($connection, "SELECT * FROM archive");
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc())
                {


                    echo '<tr>
                              <td scope="row">' . $row["id"]. '</td>
                              <td>' . $row["notam_no"] .'</td>
                              <td> '.$row["notam_type"] .'</td>
                              <td> '.$row["cancel_no"] .'</td>
                              <td> '.$row["aftn"] .'</td>
                              <td> '.$row["date"] .'</td>
                              <td> '.$row["fir"] .'</td>
                              <td> '.$row["qcode"] .'</td>
                              <td> '.$row["traffic"] .'</td>
                              <td> '.$row["purpose"] .'</td>
                              <td> '.$row["scope"] .'</td>
                              <td> '.$row["lower"] .'</td>
                              <td> '.$row["upper"] .'</td>
                              <td> '.$row["lat"] .'</td>
                              <td> '.$row["loc"] .'</td>
                              <td> '.$row["validf"] .'</td>
                              <td> '.$row["validt"] .'</td>
                              <td> '.$row["schedule"] .'</td>
                              <td> '.$row["text"] .'</td>
                            </tr>';

                }
            }
            else
            {
                echo "0 results";
            }
            ?>
             </tbody>
          </div>
      </table>


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
</html>
