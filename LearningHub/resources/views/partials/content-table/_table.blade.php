<div class="col-sm-9">
<div class="lefttable">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a data-toggle="tab" href="#trending" aria-controls="trending" role="tab">Trending</a></li>
    <li role="presentation"><a data-toggle="tab" href="#new" aria-controls="new" role="tab" >New</a></li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="trending">
      <div class="row p-b-15">
        @foreach($posts as $post)
        @include('partials.content-table._poststuff')
        @endforeach
      </div>
      <div class="text-center">
        {!!$posts->links();!!}
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="new">
        @foreach($postsnew as $post)
        <div class="row p-b-15">
        @include('partials.content-table._poststuff')
      </div>
        @endforeach
      <div class="text-center">
        {!!$posts->links();!!}
      </div>
    </div>
  </div>
</div>
</div>
