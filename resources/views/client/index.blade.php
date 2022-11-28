@extends('layouts.navbar')
@section('content')
    <br><br><br><br>
    <!-- <a class="btn btn-primary btn-sm" href="/createclient" role="button">Fill Client Details</a><br><br> -->

    <div class="col-lg-8">
        <div class="card mb-4">
            <form action="/insertclient" method="POST">
              @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Name</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" id="floatingInput">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Client Description</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="client_description" id="floatingInput">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Job Description</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="job_description" id="floatingInput">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Job Location</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="job_location" id="floatingInput">
                      </div>
                  </div>
                  <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="client_address" id="floatingInput">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="email" id="floatingInput">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Phone Number</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone" id="floatingInput">
                        </div>
                    </div>
                    <input type="hidden" name="freelancerSkillId" value={{ $freelancerSkillId }}>
                    <input type="hidden" name="bookingDate" value={{ $bookingDate }}>
                    <input type="hidden" name="slotTime" value={{ $slotTime }}>
                    <hr>
                    <input class="btn btn-primary btn-sm" type="submit" value="Submit" />
            </form>
        </div>
    @endsection
