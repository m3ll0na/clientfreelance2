
@extends('layouts.navbar')
@section('content')

<form action="/insertclient" method="post" enctype="multipart/form-data">
    @csrf

<br><br><br><br>
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

<button type="submit" class="btn btn-primary">Submit</button>
              
          </div>
      </div>
  </div>
  
    </form>

@endsection
