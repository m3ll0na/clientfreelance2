@extends('layouts.main')
@section('content')
    
<a class="btn btn-primary btn-sm" href="/createskill" role="button">add skill</a>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Skill</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>id</th>
          <th>description</th>
          <th>action</th>
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          @foreach ( $skill as $row )
            <tr>
                <td>{{ $no++ }}</td>
                <td>  {{ $row->description ?? null }}  </td>
                <td>
                    <a href="/editskill/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square fa-xs"></i></a>

                    <a href="/deleteskill/{{$row->id}}" class="btn btn-outline-danger"><i
                      class="fa-solid fa-trash fa-xs"></i></a>
                </td>
            </tr>
            @endforeach

        </tbody>
        
    </table>
  </div>
  <!-- /.card-body -->
</div>

@endsection