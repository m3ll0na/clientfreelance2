@extends('layouts.navbar')


<br><br><br>

    <title>Search page result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!--Search-->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br><br>
	<div class="row justify-content-center ">
        <div class="container-md text-center"><h3>We have the best freelancers in town - find them now!</h3></div>

       
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Skills eg: logo design, photography service">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

<!--FreelancerProfile-->

<div class="container">
<div class="row ng-scope">
    <div class="col-md-3 col-md-push-9">
    </div>
    <div class="col-md-9 col-md-pull-3">
        <p class="search-results-count">About 94 700 000 (0.39 sec.) results</p>
        <a href="#">Back To Search</a>
        <section class="search-result-item">
            <a class="image-link" href="#"><img class="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><a href="#">James</a></h4>
                        <p class="info">Kota Kinabalu,Sabah</p>
                        <p class="description">Not just usual Metro. But something bigger. Not just usual widgets, but real widgets. Not just yet another admin template, but next generation admin template.</p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p class="value3 mt-sm">$9, 700</p>
                        <p class="fs-mini text-muted">PER WEEK</p><a class="btn btn-primary btn-info btn-sm" href="/freelancer">Check Profile</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="search-result-item">
            <a class="image-link" href="#"><img class="image" src="https://bootdey.com/img/Content/avatar/avatar6.png">
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><a href="#">john doe</a> <span class="badge bg-danger fw-normal pull-right">Best Deal!</span></h4>
                        <p class="info">Los Angeles, NY 20188</p>
                        <p class="description">You will never know exactly how something will go until you try it. You can think three hundred times and still have no precise result.</p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p class="value3 mt-sm">$10, 300</p>
                        <p class="fs-mini text-muted">PER WEEK</p><a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="search-result-item">
            <a class="image-link" href="#"><img class="image" src="https://bootdey.com/img/Content/avatar/avatar2.png">
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><a href="#">john doe</a></h4>
                        <p class="info">New York, NY 20188</p>
                        <p class="description">The Great Prince of the Grand Duchy of Lithuania he had stopped the invasion to Europe of Timur (Tamerlan) from Asia heading a big Army of Belarusians, Lithuanians.</p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p class="value3 mt-sm">$3, 200</p>
                        <p class="fs-mini text-muted">PER WEEK</p><a class="btn btn-info btn-sm" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="search-result-item">
            <a class="image-link" href="#"><img class="image" src="https://bootdey.com/img/Content/avatar/avatar3.png">
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><a href="#">john doe</a></h4>
                        <p class="info">Minsk, NY 20188</p>
                        <p class="description">Yes you can! Further more, you should! It let's you create really beautiful images either for elements or for the entire background.</p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p class="value3 mt-sm">$2, 400</p>
                        <p class="fs-mini text-muted">PER MONTH</p><a class="btn btn-info btn-sm" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section>


<!--Pagination-->

        <div class="text-align-center">
            <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">Prev</a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>


<!--CSS-->

<style type="text/css">
body{margin-top:40px;
background-color: #eee;
}

.navbar .getstarted {
	background: #106eea;
	margin-left: 30px;
	border-radius: 4px;
	font-weight: 400;
	color: #fff;
	text-decoration: none;
	padding: .5rem 1rem;
	line-height: 2.3;
}
.navbar-nav a {
	font-size: 15px;
	text-transform: uppercase;
	font-weight: 500;
}
.navbar-light .navbar-brand {
	color: #000;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #000;
}
.navbar-light .navbar-nav .nav-link {
	color: #000;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #000;
}
.w-100 {
	height: 100vh;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}

.search-result-categories>li>a {
    color: #b6b6b6;
    font-size: 30px
    font-weight:600
}

.search-result-categories>li>a:hover {
    background-color: #ddd;
    color: #555
}


.search-results-count {
    margin-top: 30px
}

.search-result-item {
    padding: 50px;
    background-color: #fff;
    border-radius: 4px
}

.search-result-item:after,
.search-result-item:before {
    content: " ";
    display: table
}

.search-result-item:after {
    clear: both
}

.search-result-item .image-link {
    display: block;
    overflow: hidden;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
}


@media (min-width:768px) {
    .search-result-item .image-link {
        display: inline-block;
        margin: -20px 0 -20px -20px;
        float: left;
        width: 200px
    }
}

@media (max-width:767px) {
    .search-result-item .image-link {
        max-height: 200px
    }
}

.search-result-item .image {
    max-width: 100%
}

.search-result-item .info {
    margin-top: 2px;
    font-size: 12px;
    color: #999
}

.search-result-item .description {
    font-size: 13px
}

.search-result-item+.search-result-item {
    margin-top: 20px
}

@media (min-width:768px) {
    .search-result-item-body {
        margin-left: 200px
    }
}

.search-result-item-heading {
    font-weight: 400
}

.search-result-item-heading>a {
    color: #555
}

@media (min-width:768px) {
    .search-result-item-heading {
        margin: 0
    }
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
