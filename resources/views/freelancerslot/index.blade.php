@extends('layouts.main')
@section('content')
    
<a class="btn btn-primary btn-sm" href="/createfreelancerslot" role="button">add freelancerslot</a>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Freelancer Slot</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>id</th>
          <th>id_freelancer</th>
          <th>id_client</th>
          <th>status</th>
          <th>location</th>
          <th>startDateTime</th>
          <th>endDateTime</th>
          <th>description</th>
          <th>action</th>
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          @foreach ( $freelancerslot as $row )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$row->freelancer->name ?? null}}</td>
                <td>{{$row->client->name ?? null}}</td>
                <td>{{$row->status ?? null }}  </td>
                <td>{{$row->location ?? null }}  </td>
                <td>{{$row->startDateTime ?? null }}  </td>
                <td>{{$row->endDateTime ?? null }}  </td>
                <td>{{$row->description ?? null }}  </td>
                <td>{{$row->action ?? null }}  </td>
                <td>
                    <a href="/editfreelancerslot/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square fa-xs"></i></a>
                    <a href="/deletefreelancerslot/{{$row->id}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash fa-xs"></i></a>
                </td>
            </tr>
                @endforeach
            </tbody>           
          </table>
        </div>
      </div>
    @endsection