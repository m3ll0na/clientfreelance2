
@extends('layouts.main')
@section('content')

<form method="post" action="/updateclient/{{$client->id}}">
    @csrf

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" value="{{$client->name}}" id="floatingInput">
  <label for="floatingInput">name</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="description" value="{{$client->description}}" id="floatingInput">
  <label for="floatingInput">description</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="address" value="{{$client->address}}"  id="floatingInput">
  <label for="floatingInput">address</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="email" value="{{$client->email}}"  id="floatingInput">
    <label for="floatingInput">email</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="phoneNumber" value="{{$client->phoneNumber}}"  id="floatingInput">
    <label for="floatingInput">phoneNumber</label>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
              
          </div>
      </div>
  </div>
  
    </form>

@endsection
