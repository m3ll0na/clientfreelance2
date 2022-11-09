@extends('layouts.navbar')
@section('content')
    
<br><br><br><br>
<a class="btn btn-primary btn-sm" href="/createclient" role="button">Fill Client Details</a><br><br>

<div class="col-lg-8">
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Job Description</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Address</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Email</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Phone Number</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Total Job Hours</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"></p>
        </div>
      </div>
      <hr>
      <a class="btn btn-primary btn-sm" href="#" role="button">Submit</a><br><br>
    </div>

@endsection