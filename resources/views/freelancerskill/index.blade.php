@extends('layouts.main')
@section('content')
    

<div class="container">
  <div class="card mt-5">
      <div class="card-header text-center">
          <h2>Freelancer Search</h2>
          
          <form action="/freelancerskill/search" method="GET">
              <input type="text" name="" placeholder="insert keyword" value="{{ old('search') }}">
              <input type="submit" value="SEARCH">
          </form>
          <br/>
      </div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Freelancer Skill</h3>
    </div>
    <!-- /.card-header -->
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
          <th>id</th>
          <th>freelancer</th>
          <th>skill</th>
          <th>description</th>
          <th>rate/hour (RM)</th>
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
                <td>{{$row->freelancer_id ?? null}}</td>
                <td>{{$row->skill_id ?? null}}</td>
                <td>{{$row->description ?? null }}  </td>
                <td>{{$row->rate ?? null }}  </td>
                <td>

                <a href="/xxx {{$row->id}}" class="link-primary">See Profile</a>
                </td>
            </tr>
                @endforeach
            </tbody>           
          </table>
        </div>
      </div>
    @endsection

    