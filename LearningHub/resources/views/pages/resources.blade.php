@extends('layouts.main')
@section('title','|Homepage')
@section('content')

<div class="container m-t-20">
  <div class="row">
    <div class="left-col-contents col-sm-9">
      <div class="recents">
        <div class="recent-heading">
          <h2>Recently uploaded</h2>
          <a href="#" class="btn btn-primary m-l-70">Upload new File</a>
        </div>
        <div class="row">
          <div class="recent-content col-sm-6 m-t-15">
            <div class="content-img">
              <img src="images/bird.jpg" width="150px" alt="preview">
            </div>
            <div class="content-details">
              <h4>Red bird</h4>
              <p>uploaded on : 22/07/2017<br>Alesco</p>
            </div>
          </div>
          <div class="recent-content col-sm-6 m-t-15">
            <div class="content-img">
              <img src="images/bird.jpg" width="150px" alt="preview">
            </div>
            <div class="content-details">
              <h4>Red bird</h4>
              <p>uploaded on : 22/07/2017<br>Alesco</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="recent-content col-sm-6 m-t-15">
            <div class="content-img">
              <img src="images/bird.jpg" width="150px" alt="preview">
            </div>
            <div class="content-details">
              <h4>Red bird</h4>
              <p>uploaded on : 22/07/2017<br>Alesco</p>
            </div>
          </div>
          <div class="recent-content col-sm-6 m-t-15">
            <div class="content-img">
              <img src="images/bird.jpg" width="150px" alt="preview">
            </div>
            <div class="content-details">
              <h4>Red bird</h4>
              <p>uploaded on : 22/07/2017<br>Alesco</p>
            </div>
          </div>
        </div>
      </div>
      <div class="videos m-t-20">
        <div class="vid-head">
          <h2>Video Lectures</h2>
        </div>
        <div class="videos-lectures ">
          <div class="row">
            <div class="vid-content col-sm-6 m-t-15">
              <div class="content-img">
                <img src="images/botany.jpg" width="150px" alt="">
              </div>
              <div class="content-details">
                <h4>tech</h4>
                <p>uploaded on : 22/07/2017<br>Alesco</p>
              </div>
            </div>
            <div class="vid-content col-sm-6 m-t-15">
              <div class="content-img">
                <img src="images/botany.jpg" width="150px" alt="">
              </div>
              <div class="content-details">
                <h4>zoo</h4>
                <p>uploaded on : 22/07/2017<br>Alesco</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="digi-lib m-t-20">
        <div class="digi-head ">
          <h2>Digital Library</h2>
        </div>
        <div class="row">
          <div class="lib-content col-sm-4">
            <div class="content-img">
              <img src="images/elon.jpg" alt="" height="150px">
            </div>
            <div class="content-details">
              <h4>Elon Musk</h4>
              <p>author: xxxxqwe</p>
            </div>
          </div>
          <div class="lib-content col-sm-4">
            <div class="content-img">
              <img src="images/1234get.jpg" alt="" height="150px">
            </div>
            <div class="content-details">
              <h4>Sniper Elite</h4>
              <p>author: xxxxqwe</p>
            </div>
          </div>
          <div class="lib-content col-sm-4">
            <div class="content-img">
              <img src="images/a2z.jpg" alt="" height="150px">
            </div>
            <div class="content-details">
              <h4>Star Wars</h4>
              <p>author: xxxxqwe</p>
            </div>
          </div>
        </div>
      </div>
      <div class="PDF m-t-20">
        <div class="pdf-head">
          <h2>PDF Notes</h2>
        </div>
        <div class="row">
          <div class="pdf-content col-sm-4">
            <div class="content-details-pdf">
              <h4>software engineering</h4>
              <p>software techniques that are used in todays IT industry </p>
            </div>
          </div>
          <div class="pdf-content col-sm-4">
            <div class="content-details-pdf">
              <h4>software engineering</h4>
              <p>software techniques that are used in todays IT industry </p>
            </div>
          </div>
          <div class="pdf-content col-sm-4">
            <div class="content-details-pdf">
              <h4>software engineering</h4>
              <p>software techniques that are used in todays IT industry </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
