@extends('/layouts/main')
@section('title','|Forums')
@section('content')
  <div class="forum container header-space">
    <div class="row">
      <div class="page-header">
        <h1>Forum-Topics</h1>
      </div>
      <div class="jumbotron col-md-8 col-sm-8" style="padding:15px; margin-top:40px">
        <div class="row">
          @foreach($categories as $category)
            <div class="col-sm-4 col-md-4">
              <div class="topic-box thumbnail">
                <img src="{{ asset('images/forum.png') }}"alt="">
                <div class="Captions text-center">
                  <a href="{{route('categories.show',[$category->id])}}"><h4>{{$category->category}}</h4></a>
                </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
      @include('partials._sidecards')
    </div>
  </div>
</div>
