
@extends('layout.main')
@section('content')

<form method="post" action="/updateskill/{{$skill->id}}">
    @csrf


<div class="form-floating mb-3">
  <input type="text" class="form-control" name="description" value="{{$client->description}}" id="floatingInput">
  <label for="floatingInput">description</label>
</div>


<button type="submit" class="btn btn-primary">Submit</button>
    
  
</form>

@endsection
