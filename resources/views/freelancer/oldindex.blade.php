@extends('layouts.main')
@section('content')

    
<a class="btn btn-primary btn-sm" href="/createfreelancer" role="button">add freelancer</a>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Freelancer Details</h3>
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
          <th>accountNumber</th>
          <th>accountBank</th>
          <th>hourlyWage</th>
          <th>photo</th>
          <th>action</th>
          
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          @foreach ( $freelancer as $row )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$row->name ?? null}}</td>
                <td>{{$row->description ?? null}}</td>
                <td>{{$row->address ?? null }}  </td>
                <td>{{$row->email ?? null }}  </td>
                <td>{{$row->phoneNumber ?? null }}  </td>
                <td>{{$row->accountNumber ?? null }}  </td>
                <td>{{$row->accountBank ?? null }}  </td>
                <td>{{$row->hourlyWage ?? null }}  </td>
                <td>
                    <img src="{{ asset($row->photo) }}" width= '80' height='80' class="img img-responsive" />
                </td>
                <td>
                    <a href="/editfreelancer/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square fa-xs"></i></a>
                </td>
            </tr>
                @endforeach
            </tbody>           
          </table>
        </div>
      </div>
      @endsection
   