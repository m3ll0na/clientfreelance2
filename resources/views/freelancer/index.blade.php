@extends('layouts.navbar')

<section style="background-color: #eee;">
  <br>
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/freelancerskill/search">Back To Search</a></li>
            <li class="breadcrumb-item active" aria-current="page">Freelancer Profile</li>
          </ol>
        </nav>
      </div>
    </div>


<!--Freelancer Snippet-->

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">James</h5>
            <p class="text-muted mb-1">Logo Designer</p>
            <p class="text-muted mb-4">2 years experience logo design for corporate and events</p>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
              <p class="mb-0">James Design</p>
            </li>
          </div>
        </div>


<!--Booking Hours-->

        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
          
              <div class="card bg-c-blue order-card">
                <div class="card-block text-center">
                  <br>
                    <h6 class="m-b-20">Booking Hours Received</h6>
                    <h2 class="text-right"><i class="fa-solid fa-cart-shopping"></i></i>&nbsp<span>30</span></h2>
                    <br>
                    <h6 class="m-b-20">Completed Orders</h6>
                    <h2 class="text-right"><i class="fa-regular fa-circle-check"></i></i>&nbsp<span>30</span></h2>
                <br>
                  </div>
            </div>
          </ul>
        </div>
      </div>
    </div>


<!--Freelancer Field-->

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">James Brooke</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">james@domain.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Kota Kinabalu, Sabah</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">01127406137</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Account Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">****733622479345</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Account Bank</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">CIMB</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Rate Per Hour<br>(RM)</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">70</p>
              </div>
            </div>
            

<!--Booking History-->

          </div>
        </div>
        <div class="row">
          <div class="col-md-14">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <table class="table">
                  <thead>
                    <h5>Booking History</h5>
                    <tr>
                      <th scope="col">Job</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time Slot</th>
                      <th scope="col">Location</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Logo design</td>
                      <td><button type="button" class="btn btn-primary btn-sm">10am</button>&nbsp;<button type="button" class="btn btn-primary btn-sm">11am</button></td>
                      <td>Kota Kinabalu, Sabah</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Logo design</td>
                      <td><button type="button" class="btn btn-primary btn-sm">10am</button>&nbsp;<button type="button" class="btn btn-primary btn-sm">11am</button></td>
                      <td>Kota Kinabalu, Sabah</td>
                    </tr>
                  </tbody>
                </table>


<!--Call or book-->

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="#"></a><button class="btn btn-outline-primary" type="button">Call</button>
                  <a href="/freelancerslot" <button class="btn btn-primary me-md-2" type="button">Book</button></a>
                </div>

                </div>
              </div>
            </div>
          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>