
@extends('layout.main')
@section('content')

<form action="/insertskill" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-floating mb-3">
  <input type="text" class="form-control" name="description" id="floatingInput">
  <label for="floatingInput">description</label>
    </div>

<button type="submit" class="btn btn-primary">Submit</button>
            
</form>

@endsection
