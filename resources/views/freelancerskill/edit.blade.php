
@extends('layout.main')
@section('content')

<form method="post" action="/updatefreelancerskill/{{$freelancerskill->id}}">
    @csrf

<div class="mb-3">
    <label  class="form-label">id_freelancer</label>
    <select class="form-control" name="freelancer_id" required>
        <option value="{{$freelancerskill->id}}">{{$freelancerskill->Freelancer->name ?? null}}</option>
        
        @foreach (App\Models\Freelancer::get() as $item)
            <option value="{{$item->name}}"> 
                {{$item->name}}
            </option>
        @endforeach

    </select>
</div>

<div class="mb-3">
    <label  class="form-label">id_skill</label>
    <select class="form-control" name="skill_id" required>
        <option value="{{$freelancerskill->id}}">{{$freelancerskill->Skill->description ?? null}}</option>
        
        @foreach (App\Models\Skill::get() as $item)
            <option value="{{$item->description}}"> 
                {{$item->description}}
            </option>
        @endforeach

    </select>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" name="description" value="{{$freelancerskill->description}}"  id="floatingInput">
  <label for="floatingInput">description</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="rate" value="{{$freelancerskill->rate}}"  id="floatingInput">
    <label for="floatingInput">rate</label>
  </div>


<button type="submit" class="btn btn-primary">Submit</button>
              
          </div>
      </div>
  </div>
  
    </form>

@endsection
