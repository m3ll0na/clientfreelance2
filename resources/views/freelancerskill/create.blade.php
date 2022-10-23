@extends('layout.main')
@section('content')

<form action="/insertfreelancerskill" method="post" enctype="multipart/form-data">
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
                <label  class="form-label">id_skill</label>
                <select class="form-control" name="id_skill" required>
            
                    <option value="">select skill</option>
                                
                    @foreach (App\Models\Skill::get() as $item)
                        <option value="{{$item->description}}"> 
                             {{$item->description}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-8">
                <label  class="form-label">description</label>
                <input type="text" class="form-control" name="description" required>
            </div>

            <div class="mb-8">
                <label  class="form-label">rate</label>
                <input type="text" class="form-control" name="rate" required>
            </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

</form>
@endsection