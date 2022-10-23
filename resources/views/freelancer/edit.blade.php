
@extends('layout.main')
@section('content')

<form method="post" action="/updatefreelancer/{{$freelancer->id}}">
    @csrf

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" value="{{$freelancer->name}}" id="floatingInput">
  <label for="floatingInput">name</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="description" value="{{$freelancer->description}}" id="floatingInput">
  <label for="floatingInput">description</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="address" value="{{$freelancer->address}}"  id="floatingInput">
  <label for="floatingInput">address</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="email" value="{{$freelancer->email}}"  id="floatingInput">
    <label for="floatingInput">email</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="phoneNumber" value="{{$freelancer->phoneNumber}}"  id="floatingInput">
    <label for="floatingInput">phoneNumber</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="accountNumber" value="{{$freelancer->phoneNumber}}"  id="floatingInput">
    <label for="floatingInput">accountNumber</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="accountBank" value="{{$freelancer->phoneNumber}}"  id="floatingInput">
    <label for="floatingInput">accountBank</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="hourlyWage" value="{{$freelancer->phoneNumber}}"  id="floatingInput">
    <label for="floatingInput">hourlyWage</label>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
              
          </div>
      </div>
  </div>
  
    </form>

@endsection
