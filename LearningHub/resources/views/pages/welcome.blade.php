@extends('layouts.main')
@section('title','|Homepage')
@section('content')
<div class="container">
  <div class="row">
      @include('partials.content-table._table')
      @include('partials._sidecards')
  </div>
</div>
@endsection
