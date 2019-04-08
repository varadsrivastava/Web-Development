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
            format: "yyyy-mm-dd"
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
                  <form action="", method="post", name="">

                      <div class='row'>
                        <div class='col'>
                          <label for="notam_no">NOTAM Number</label>
                          <input type="text" id="notam_no" name="notam_no">
                          </div>
                        <div class='col'>
                         <label for="notam_type">Type</label>
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

                          <select name="notam_type">
                              <?php foreach($users as $user): ?>
                                  <option value="<?= $user['id']; ?>"><?= $user['type']; ?></option>
                              <?php endforeach; ?>
                          </select>

                       </div>
                       <div class='col'>
                         <label for="cancel_no">Cancel No</label>
                         <input type="text" id="cancel_no" name="cancel_no">
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
                   <label for="text">Text</label>
                   <input type="text" id="text" name="text">
                </div>



              <button type="submit" class="btn btn-secondary" name="add_button"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send</button>
              </form>
            </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                  <div class="row">


                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </div>



              </div>
            </div>
            </div>
          </div>
      </div>


      <?php


          if(isset($_POST["add_button"]))
          {
          $notam_no = $_POST['notam_no'];
          $notam_type = $_POST['notam_type'];
          $cancel_no = $_POST['cancel_no'];
          $aftn = $_POST['aftn'];
          $date = $_POST['date'];
          $fir = $_POST['fir'];
          $qcode = $_POST['qcode'];
          $traffic = $_POST['traffic'];
          $purpose = $_POST['purpose'];
          $scope = $_POST['scope'];
          $lower = $_POST['lower'];
          $upper = $_POST['upper'];
          $lat = $_POST['lat'];
          $loc = $_POST['loc'];
          $validf = $_POST['validf'];
          $validt = $_POST['validt'];
          $schedule = $_POST['schedule'];
          $text = $_POST['text'];

          $archive_add = "insert into archive
                  (notam_no,notam_type,cancel_no,aftn,date,fir,qcode,traffic,purpose,scope,lower,upper,lat,loc,validf,validt,schedule,text) values
                  ('$notam_no','$notam_type','$cancel_no','$aftn','$date','$fir','$qcode','$traffic','$purpose','$scope','$lower','$upper',
                  '$lat','$loc','$validf','$validt','$schedule','$text')";
          mysqli_query($connection,$archive_add)
          or die(mysqli_error($connection));
          $status = "New Record Inserted Successfully.";
        }


       ?>





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
                </div>  







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


  </body>
</html>
