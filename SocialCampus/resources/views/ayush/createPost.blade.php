@extends('layouts.app')
@section('title', 'create Post | ')
@section('content')
<h2>Home page containing floating button</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn"><span class="glyphicon glyphicon-plus"></span></button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 class="text-center">New Post</h2>
    </div>
    <form>
      <div class="modal-body">
        <hr>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <div class="row">
              <h6 class="text-left col-xs-8">Select topic for your post..</h6>
              <span class="caret" style="float:right;margin:10px;"></span>
            </div>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a class="text-center">Study</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Maths</a></li>
            <li><a href="#">English</a></li>
            <li><a href="#">Computer Science</a></li>
            <li role="separator" class="divider"></li>
            <li><a class="text-center">Fun</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Family</a></li>
          </ul>
        </div>
        <div class="form-group">
          <hr>
          <input type=text name = "postDescription" placeholder="   something about your post" style="width:100%;"></input>
          <hr>
          <textarea class="form-control" rows="4" placeholder="Caption of your post"></textarea>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-5">
            <input type="file" name="pic" accept="image/*">
          </div>
          <div class="col-xs-2">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Post Visibility <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Public</a></li>
              <li><a href="#">Only to followers</a></li>
              <li><a href="#">following and followers</a></li>
            </ul>
          </div>
          <div class="col-xs-1" style="float:right">
            <button class="btn btn-primary" style="float:right;">Post</button>
          </div>
        </div>
        <hr>
      </div>
    </form>
  </div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    btn.onclick = function() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  </script>
@endsection
