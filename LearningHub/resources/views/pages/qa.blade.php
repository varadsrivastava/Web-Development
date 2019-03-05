@extends('/layouts/main')
@section('title','|post')
@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')
  <!-- scripts and stylesheets for QA -->
  <script src="js/qa.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/qa.css') }}" />
  <!--end of scripts and stylesheets  -->


  <div class="container">
    <!-- Question Box begins here  -->
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Ask your question</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{ route('question.store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-newspaper-o "></i>
              Choose the appropriate tags for your thread.
            </div>
            <label class="col-lg-3 control-label" for="category">Category:</label>
            <div class="col-lg-8">
              <select id="category" name="category" class="form-control">
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
              </select>
            </div>

            <label for="tags" class="col-lg-3 control-label p-t-10">Tags:</label>
            <div class="col-lg-8">
              <div class="ui-select p-t-10">
                <select id="tags" name="tags[]" multiple class="form-control">
                  @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="wrap m-t-30">
              <textarea class="form-control" name="ques"  rows="5" id="ques" placeholder="Type your question here.."></textarea>
            </div>
          </div>
          <span id="text_counter"></span>
          <button type="submit" class="btn btn-danger" data-toggle="modal">Ask</button>
        </form>
      </div>
    </div>
    <!-- Question-box ends here -->

    <!-- tab panel for question category begins -->
    <div class="col-sm-9">
    <div class="lefttable">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a data-toggle="tab" href="#trending" aria-controls="trending" role="tab">Trending</a></li>
        <li role="presentation"><a data-toggle="tab" href="#new" aria-controls="new" role="tab" >New</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="trending">
          <div class="row p-b-15">
            <div class="post p-t-10 m-b-20">
              <div class="post-category col-xs-5 col-xs-offset-7 text-center">
                <h4>MOBILE</h4>
              </div>
              <div class="post-photo m-l-10 ">
                <img class="img-responsive"src="{{ asset('images/'.'1502032817.jpg') }}"alt="">
                <span class="photo-caption">Vikash</span>
              </div>
              <div class="post-head m-l-10">
                <a href="#"><h3>When is the latest update of miui is coming??</h3></a>
              </div>
              <div class="row m-t-35">
                <div class="col-xs-12 col-sm-5">
                  <div class="post-status p-t-5">
                    <ul class="flex-container">
                      <li class="flex-item"><span class="fa fa-eye ">3</span></li>
                      <li class="flex-item"><span class="fa fa-thumbs-o-up ">1</span></li>
                      <li class="flex-item"><span class="fa fa-comments ">1</span></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>

        <!-- end of tab panel -->
</div>
@endsection
@section('scripts')
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script type="text/javascript">
  $("#tags").select2({
    tags: true,
  });
  $("#category").select2({
    tags: true,
  });
  </script>
@endsection
