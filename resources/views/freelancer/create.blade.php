
@extends('layout.main')
@section('content')

<form action="/insertfreelancer" method="post" enctype="multipart/form-data">
    @csrf

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" id="floatingInput">
  <label for="floatingInput">name</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="description" id="floatingInput">
  <label for="floatingInput">description</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="address" id="floatingInput">
  <label for="floatingInput">address</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="email" id="floatingInput">
    <label for="floatingInput">email</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="phoneNumber" id="floatingInput">
    <label for="floatingInput">phoneNumber</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="accountNumber" id="floatingInput">
    <label for="floatingInput">accountNumber</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="accountBank" id="floatingInput">
    <label for="floatingInput">accountBank</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="hourlyWage" id="floatingInput">
    <label for="floatingInput">hourlyWage</label>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
              
          </div>
      </div>
  </div>
  
    </form>

@endsection
