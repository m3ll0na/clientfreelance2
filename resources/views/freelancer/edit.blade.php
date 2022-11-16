@extends('layouts.main')
@section('content')

<form method="post" action="/updatefreelancer/{{$freelancer->id}}">
    @csrf

    <div class="card">
        <div class="card-header">Freelancer Details</div>
        <div class="card-body">
            
            <form action="{{ url('freelancer') }}" method="post" enctype="multipart/form-data">
              {!! csrf_field() !!}


              <label>Name</label></br>
              <input type="text" name="name" id="name" class="form-control" value="{{$freelancer->name}}"></br>
      
              <label>description</label></br>
              <input type="text" name="description" id="description" class="form-control" value="{{$freelancer->description}}"></br>
      
              <label>Address</label></br>
              <input type="text" name="address" id="address" class="form-control" value="{{$freelancer->address}}"></br>
      
              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control" value="{{$freelancer->email}}"></br>
      
              <label>phoneNumber</label></br>
              <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" value="{{$freelancer->phoneNumber}}"></br>
      
              <label>accountNumber</label></br>
              <input type="text" name="accountNumber" id="accountNumber" class="form-control" value="{{$freelancer->accountNumber}}"></br>
      
              <label>accountBank</label></br>
              <input type="text" name="accountBank" id="accountBank" class="form-control" value="{{$freelancer->accountBank}}"></br>
      
              <label>hourlyWage</label></br>
              <input type="text" name="hourlyWage" id="hourlyWage" class="form-control" value="{{$freelancer->hourlyWage}}"></br>
      
              <input class="form-control" name="photo" type="file" id="photo" value="{{$freelancer->photo}}">
       
              
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>
        
        </div>
      </div>
      @endsection