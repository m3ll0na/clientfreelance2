
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFFLIX </title>
    <link rel="manifest" href="/manifest.json">
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning"></span></a>
          <img src="img/icon1.jpg" width="100" height="" class="d-inline-block align-top" alt=""><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Why Choose Us</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
         
              
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Easy. Quick. Any Job</h5>
                              <p><i>Easy Website Navigation</i></p>
                              <p><i>Quick Search By Categories</i></p>
                              <p><i>Any Job You Can Think Of</i></p>
                              <p><i>Hire The Best Freelancers with PROFFLIX</i></p>
                              <p><a href="/freelancerskill/search" class="btn btn-warning mt-3">Search Now</a></p>
            </div>
        </div>
                              
        <div class="carousel-item">
            <img src="img/banner2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>New User?</h5>
                                <h1><p>Enjoy 5% rebate, use code NEW2022 upon checkout</p></h1>
                                <p><a href="/freelancerskill/search" class="btn btn-success mt-3">Use Now</a></p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/banner1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Current User?</h5>
                                <h1><p>Enjoy 5% rebate, use code DEC22 upon checkout</p>
                                <p>Ends 31 Dec 2022</h1></p>
                                <p><a href="/freelancerskill/search" class="btn btn-info mt-3">Use Now</a></p>
            </div>
            </div>
        </div>

                            
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
     



      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="" class="img-fluid">
                  </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>About Us</h2><br>
                            <p>PROFFLIX is the first web platform in Sabah that connects clients and freelancers.<br>
                                
                            <br>PROFFLIX  is developed by a group of 10 Freelancers with common visions: flexibility in working hours,helping businesses find more workforce resources and connecting talent with more opportunities.<br>
                         
                            <br>This platform is designed to achieve the goals and by supporting us, you also support the visions of thousand mind.</p>
                     
                        </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->


        <!-- how to use this website -->
        <section class="services section-padding" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h2>Need something done?</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-dark text-center bg-warning pb-2">
                          <div class="card-body">
                            <i class="bi bi-bookmarks-fill"></i>
                              <h3 class="card-title">Search Freelancer</h3>
                              <p class="lead">Find freelancers using search form by skill categories and location. Client can view freelancer's booking calendar and find desired slot.</p>
        
                          </div>
                      </div>
                  </div>

                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-dark text-center bg-warning pb-2">
                            <div class="card-body">
                                <i class="bi bi-bookmark-star-fill"></i>
                                <h3 class="card-title">Book Freelancer</h3>
                                <p class="lead">After client click the 'book' button, notification will be sent to Freelancer to accept or reject job. Job confirmation will be sent by email within 24 hours.<p>
                                </div>
                            </div>
                        </div>
    

                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-dark text-center bg-warning pb-2">
                            <div class="card-body">
                                <i class="bi bi-bookmark-star-fill"></i>
                                <h3 class="card-title">Pay Safely</h3>
                                <p class="lead">Client only pay for work when the work completes. Milestone payment system is available for selected account.<br><br></p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>

      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Why Choose Us?</h2>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Ease Of Use</h3>
                            <p class="lead">For client, you only need to have three things in mind; required skill,time and location. Then click search!</p><br>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-journal"></i>
                              <h3 class="card-title">Fair Compensation</h3>
                              <p class="lead">All jobs be broken down into manageable pieces which allows for fair and transparent compensation.</p><br>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-intersect"></i>
                              <h3 class="card-title">Seasonal Price Reduction</h3>
                              <p class="lead">Coupons and rebates available during peak season</p><br><br>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- services section Ends -->

      <!-- team starts -->
      <section class="team section-padding" id="team">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Get work done in these categories</h2>
                   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-1.png" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Website, IT & Software</h3>
                        
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-2.png" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Design &<br> Media</h3>
                      
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-3.png" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Writing & Content</h3>
                       
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-6.png" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Translation &<br>Languange</h3>
                      
                    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-5.png" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Beauty</h3>
                        
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-4.png" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Education</h3>
                      
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-7.png" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Art</h3>
                       
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-8.png" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Automotive</h3>
                       
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
      <!-- team ends -->

       <!-- price structure -->
       <section class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Subscription</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-dark text-center bg-light pb-2">
                      <div class="card-body">
                        <i class="bi bi-bookmarks-fill"></i>
                          <h3 class="card-title">Regular<br>FREE</h3>
                          <p class="lead">-Login not required<br>-Book Freelancers within district</p>
                          
                      </div>
                  </div>
              </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-dark text-center bg-info pb-2">
                        <div class="card-body">
                            <i class="bi bi-bookmark-star-fill"></i>
                            <h3 class="card-title">Pro<br>RM45</h3>
                            <p class="lead">-Unlimited freelancer<br>booking<br>-View booking history<br>-Counter offer feature<br>-Milestone Payment System</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-dark text-center bg-warning pb-2">
                        <div class="card-body">
                            <i class="bi bi-star-fill"></i>
                            <h3 class="card-title">Corporate<br>RM75</h3>
                            <p class="lead">-Unlimited freelancer booking<br>-View Booking History & Freelancer Review<br>-Counter offer feature<br>-Milestone Payment System<br>-Referral program with reward</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     

      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>For inquiries, proposals or partnership opportunities</p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white">All Right Reserved By Profflix</p>
          </div>
      </footer>
      <!-- footer ends -->

    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>



