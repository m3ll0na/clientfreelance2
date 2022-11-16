@extends('layouts.main')
@section('content')

<div class="card">
  <div class="card-header">Freelancer Details</div>
  <div class="card-body">
      
      <form action="{{ url('freelancer') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>

        <label>phoneNumber</label></br>
        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"></br>

        <label>accountNumber</label></br>
        <input type="text" name="accountNumber" id="accountNumber" class="form-control"></br>

        <label>accountBank</label></br>
        <input type="text" name="accountBank" id="accountBank" class="form-control"></br>

        <label>hourlyWage</label></br>
        <input type="text" name="hourlyWage" id="hourlyWage" class="form-control"></br>

        <input class="form-control" name="photo" type="file" id="photo">
 
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection