
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
  <label for="floatingInput">job description</label>
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

  <div class='col-md-6'>
    <div class="form-group">
     <label class="control-label">Slot (Job Start):</label>

     <input type="datetime-local" id="meeting-time"
            name="meeting-time" value="2022-11-12T08:00"
            min="2022-11-07T08:00" max="2022-12-14T00:00">
       </div>
    </div><br>
    <label class="control-label">Slot (Job End):</label>
    <input type="datetime-local" id="meeting-time"
    name="meeting-time" value="2022-11-12T08:00"
    min="2022-11-07T08:00" max="2022-12-14T00:00">
      </div>
    </div>
  
    <div class="d-flex justify-content-around">
 <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</div>

    </form>

@endsection
