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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#pickyDate').datepicker({
            format: "dd/mm/yyyy"
        });
    });
</script>

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
    <a class="nav-link active" href="javascript:void(0)">NOTAM</a>
  </li>
  <li class="navbar-nav">
    <a class="nav-link" href="notam_history.php">History</a>
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

  <div class="container" id="managecontainer">
    <div class="row" >
      <div class="col">
        <div class="card">
          To generate and send NOTAMs, go here :
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#send_notam">
            Generate and Send NOTAMs
          </button>

            <!-- The Modal -->
            <div class="modal" id="send_notam">
            <div class="modal-dialog-sm">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Send NOTAM</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form action="/action_page.php">
                      <div class='row'>
                        <div class='col'>
                      <label for="no">NOTAM Number</label>
                      <input type="text" id="no" name="no">
                        </div>
                       <div class='col'>
                         <label for="notam_type_drop">Type</label>
                         <?php

                          //Connect to our MySQL database using the PDO extension.
                          $pdo = new PDO('mysql:host=localhost;dbname=notam', 'root', '');

                          //Our select statement. This will retrieve the data that we want.
                          $sql = "SELECT id, type FROM notamlist";

                          //Prepare the select statement.
                          $stmt = $pdo->prepare($sql);

                          //Execute the statement.
                          $stmt->execute();

                          //Retrieve the rows using fetchAll.
                          $users = $stmt->fetchAll();

                          ?>

                          <select>
                              <?php foreach($users as $user): ?>
                                  <option value="<?= $user['id']; ?>"><?= $user['type']; ?></option>
                              <?php endforeach; ?>
                          </select>

                       </div>
                       <div class='col'>
                         <label for="cancelno">Cancel No</label>
                         <input type="text" id="cancelno" name="cancelno">
                       </div>
                       <div class='col'>
                         <label for="aftn">AFTN Origin</label>
                         <input type="text" id="aftn" name="aftn">
                       </div>
                       <div class='col'>
                         <label for="date">Date Recieved</label>
                         <input type='text' id="pickyDate" name="date"/>

                       </div>
                      </div>



                      <div class='row'>
                        <h4>Q)</h4>
                        <div class='col'>
                      <label for="fir">Fir</label>
                      <input type="text" id="fir" name="fir">
                        </div>
                       <div class='col'>
                         <label for="qcode">QCode</label>
                         <input type="text" id="qcode" name="qcode">
                       </div>
                       <div class='col'>
                         <label for="traffic">Traffic</label>
                         <input type="text" id="traffic" name="traffic">
                       </div>
                       <div class='col'>
                         <label for="purpose">Purpose</label>
                         <input type="text" id="purpose" name="purpose">
                       </div>
                       <div class='col'>
                         <label for="scope">Scope</label>
                         <input type="text" id="scope" name="scope">
                       </div>
                       <div class='col'>
                         <label for="lower">Lower</label>
                         <input type="text" id="lower" name="lower">
                       </div>
                       <div class='col'>
                         <label for="upper">Upper</label>
                         <input type="text" id="upper" name="upper">
                       </div>
                       <div class='col'>
                         <label for="lat">Lat/Long/Rad</label>
                         <input type="text" id="lat" name="lat">
                       </div>
                     </div>



                    <div>
                      <h4>A)</h4>
                      <label for="loc">Location(s)</label>
                      <input type="text" id="loc" name="loc">
                   </div>



                   <div class='row'>
                     <div class="col">
                       <h4>B)</h4>
                       <label for="validf">Valid From</label>
                       <input type="text" id="validf" name="validf">
                     </div>
                     <div class="col">
                       <h4>C)</h4>
                       <label for="validt">Valid To</label>
                       <input type="text" id="validt" name="validt">
                     </div>
                  </div>




                  <div>
                    <h4>D)</h4>
                    <label for="schedule">Schedule</label>
                    <input type="text" id="schedule" name="schedule">
                 </div>




                 <div>
                   <h4>E)</h4>
                   <label for="fname">Text</label>
                   <input type="text" id="fname" name="firstname">
                </div>



              </form>
            </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <div class="row">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send</button>

                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </div>

              </div>
            </div>
            </div>
          </div>
      </div>





      <div class="col">
      <!-- Button to Open the Modal -->
      <div class="card">
        To Edit list of NOTAMs, go here :
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
          EDIT NOTAMs
        </button>


          <!-- The Modal -->
          <div class="modal" id="myModal2">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Edit list of NOTAMs</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <p> Welcome to NOTAM Editing Dashboard </p>
                <h2> Add NOTAM Type </h2>

                <?php
                    $status = "";
                    if(isset($_POST['new']) && $_POST['new']==1){
                        $type =$_POST["type"];
                        $submittedby = $user_check;
                        $ins_query="insert into notamlist
                        (type,submittedby) values
                        ('$type','$submittedby')";
                        mysqli_query($connection ,$ins_query)
                        or die(mysqli_error($connection));
                        $status = "New Record Inserted Successfully.";
                    }
                    ?>

                    <form name="add" method="post" action="">
                      <input type="hidden" name="new" value="1" />
                      <p><input type="text" name="type" placeholder="NOTAM type" required /></p>
                      <p><input name="submit" type="submit" value="Submit" /></p>
                    </form>
              </div>

              <h2> Remove NOTAM type </h2>

                  <?php
                    if(isset($_POST['del']))
                    {
                    $type2 = $_POST["type2"];
                    $query = "DELETE FROM notamlist WHERE type='$type2'";
                    $result = mysqli_query($connection,$query) or die ( mysqli_error($connection));
                    }
                    ?>

                  <form name="delete" method="post" action="">
                    <input type="hidden" name="del" value="1" />
                      <p><input type="text" name="type2" placeholder="NOTAM type" required /></p>
                      <p><input name="submit" type="submit" value="Delete" /></p>
                  </form>








              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
          </div>
        </div>

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
</html>
