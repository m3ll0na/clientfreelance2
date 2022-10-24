@extends('layouts.main')
@section('content')
    
<a class="btn btn-primary btn-sm" href="/createfreelancerskill" role="button">add freelancerskill</a>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Freelancer Skill</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>id</th>
          <th>id_freelancer</th>
          <th>id_skill</th>
          <th>description</th>
          <th>rate</th>
          <th>action</th>
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          @foreach ( $freelancerskill as $row )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$row->freelancer->name ?? null}}</td>
                <td>{{$row->skill->name ?? null}}</td>
                <td>{{$row->description ?? null }}  </td>
                <td>{{$row->rate ?? null }}  </td>
                <td>{{$row->action ?? null }}  </td>
                <td>
                    <a href="/editfreelancerskill/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square fa-xs"></i></a>
                    <a href="/deletefreelancerskill/{{$row->id}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash fa-xs"></i></a>
                </td>
            </tr>
                @endforeach
            </tbody>           
          </table>
        </div>
      </div>
    @endsection