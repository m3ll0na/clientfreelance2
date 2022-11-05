@extends('layouts.navbar')
@section('content')
    
<br><br><br><br>
<a class="btn btn-primary btn-sm" href="/createclient" role="button">Add Client Detail</a><br><br>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Client</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>description</th>
          <th>address</th>
          <th>email</th>
          <th>phoneNumber</th>
          <th>action</th>
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          @foreach ( $client as $row )
            <tr>
                <td>{{ $no++ }}</td>
                <td>  {{ $row->name ?? null }}  </td>
                <td>  {{ $row->description ?? null }}  </td>
                <td>  {{ $row->address ?? null }}  </td>
                <td>  {{ $row->email ?? null }}  </td>
                <td>  {{ $row->phoneNumber ?? null }}  </td>
                <td>
                    <a href="/editclient/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square fa-xs"></i></a>

                    <a href="/deleteclient/{{$row->id}}" class="btn btn-outline-danger"><i
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