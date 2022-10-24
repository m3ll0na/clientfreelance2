@extends('layouts.main')
@section('content')

<form action="/insertfreelancerslot" method="post" enctype="multipart/form-data">
    @csrf

<div class="container">
    <div class="row">
        <div class="col-4">
            
            <div class="mb-3">
                <label  class="form-label">id_freelancer</label>
                <select class="form-control" name="id_freelancer" required>

                    <option value="">select freelancer</option>
                    
                    @foreach (App\Models\Freelancer::get() as $item)
                        <option value="{{$item->name}}"> 
                            {{$item->name}}
                        </option>
                    @endforeach
        
                </select>
            </div>

<div class="container">
    <div class="row">
        <div class="col-4">
                        
            <div class="mb-3">
                <label  class="form-label">id_client</label>
                <select class="form-control" name="id_client" required>
            
                    <option value="">select client</option>
                                
                    @foreach (App\Models\Client::get() as $item)
                        <option value="{{$item->name}}"> 
                             {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-8">
                <label  class="form-label">status</label>
                <input type="text" class="form-control" name="status" required>
            </div>

            <div class="mb-8">
                <label  class="form-label">location</label>
                <input type="text" class="form-control" name="location" required>
            </div>

            <div class="mb-8">
                <label  class="form-label">startDateTime</label>
                <input type="text" class="form-control" name="startDateTime" required>
            </div>

            <div class="mb-8">
                <label  class="form-label">endDateTime</label>
                <input type="text" class="form-control" name="endDateTime" required>
            </div>

            <div class="mb-8">
                <label  class="form-label">description</label>
                <input type="text" class="form-control" name="description" required>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

</form>
@endsection