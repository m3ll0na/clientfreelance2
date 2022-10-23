
@extends('layout.main')
@section('content')

<form method="post" action="/updatefreelancer/{{$freelancerslot->id}}">
    @csrf

<div class="mb-3">
    <label  class="form-label">id_freelancer</label>
    <select class="form-control" name="id_freelancer" required>
        <option value="{{$freelancerslot->id}}">{{$freelancerslot->Freelancer->name ?? null}}</option>
        
        @foreach (App\Models\Freelancer::get() as $item)
            <option value="{{$item->name}}"> 
                {{$item->name}}
            </option>
        @endforeach

    </select>
</div>

<div class="mb-3">
    <label  class="form-label">id_client</label>
    <select class="form-control" name="id_client" required>
        <option value="{{$freelancerslot->id}}">{{$freelancerslot->Client->name ?? null}}</option>
        
        @foreach (App\Models\Client::get() as $item)
            <option value="{{$item->name}}"> 
                {{$item->name}}
            </option>
        @endforeach

    </select>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="status" value="{{$freelancerslot->status}}"  id="floatingInput">
  <label for="floatingInput">status</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="location" value="{{$freelancerslot->location}}"  id="floatingInput">
    <label for="floatingInput">location</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="description" value="{{$freelancerslot->description}}"  id="floatingInput">
    <label for="floatingInput">description</label>
    <textarea name="description" id="" cols="40" rows="10" required></textarea>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
              
          </div>
      </div>
  </div>
  
    </form>

@endsection
