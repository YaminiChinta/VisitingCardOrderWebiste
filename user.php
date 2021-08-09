<?php
    session_start();

    if(!isset($_SESSION['visitingcardcreation'])){
        header("Location : userlogin.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("Location: userlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" href="assets/css/user.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/img/logo.jpg" alt="Logo" width="120px" height="50px">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#designs">Designs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#offers">Our Offers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#order">Ordering</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#payment">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php?logout=true">LOGOUT</a>
                                    </li>
                                </ul>
                            </div>

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(https://images.unsplash.com/photo-1599590984817-0c15f31b1fa5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmFtZSUyMGNhcmR8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Beautiful Card Design for You.......</h3>
                            <p class="text">A simple, customizable, and, beautiful business focused Card Design page to make your visiting card closer to launch!</p>
                            <ul class="header-btn">
                                <!-- <li><a class="main-btn btn-one" href="#">GET IN TOUCH</a></li> -->
                                <!-- <li><a class="main-btn btn-two video-popup" href="https://www.youtube.com/watch?v=r44RKWyfcFw">WATCH THE VIDEO <i class="lni-play"></i></a></li> -->
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            
        </div> <!-- header content -->
    </header>
   <section id="designs">
   <div class="container">
	<div class="row">
        <h2>Our Designs</h2><br><br>
		<div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Front part Bussiness card"
                   data-image="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/blue-and-orange-modern-business-card-design-template-0dd08e5d4f126330efc617f6e7b55e0a.jpg?ts=1592543059"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/blue-and-orange-modern-business-card-design-template-0dd08e5d4f126330efc617f6e7b55e0a.jpg?ts=1592543059"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 25   CardNo:1<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Golden sheet card"
                   data-image="https://www.pikpng.com/pngl/m/460-4605274_business-card-gold-template-metal-png-image-with.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://www.pikpng.com/pngl/m/460-4605274_business-card-gold-template-metal-png-image-with.png"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 45   CardNo:2<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Beauty card"
                   data-image="https://www.teahub.io/photos/full/109-1099230_beauty-parlour-visiting-card-design-psd.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://www.teahub.io/photos/full/109-1099230_beauty-parlour-visiting-card-design-psd.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;" >Rs 22   CardNo:3<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Simple card"
                   data-image="assets/img/carddesign6.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/carddesign6.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 30   CardNo:4<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Blue Card"
                   data-image="assets/img/design4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design4.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 20   CardNo:5<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="orange Card"
                   data-image="assets/img/design5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design5.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 32   CardNo:6<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Dark Green Card"
                   data-image="assets/img/design3.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design3.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 28   CardNo:7<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gray Card"
                   data-image="assets/img/design7.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design7.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 19   CardNo:8<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Logo Card"
                   data-image="assets/img/design8.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design8.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 40   CardNo:9<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Red Card"
                   data-image="assets/img/design9.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design9.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 35   CardNo:10<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Cement Card"
                   data-image="assets/img/design10.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design10.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 15   CardNo:11<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="New model card"
                   data-image="assets/img/design11.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="assets/img/design11.jpg"
                         alt="Another alt text">
                </a>
                <div class="row">
                <a href="#order" style="text-decoration:none;">Rs 20   CardNo:12<button type="submit" class="btn btn-success btn-sm float-right" >order</button></a>
                </div>
            </div>
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
   </section>
  
   <section id="offers">
   <section class="pricing-table">
			<div class="container">
				<div class="block-heading">
					<h2>Our Offers</h2>
					<p>We are providig best offers for not getting delevary service charges...</p>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="heading">
								<h3>BASIC</h3>
							</div>
							<p>You will be charged 40Rs for delivery service when you place an order</p>
							<div class="features">
								<h4><span class="feature">Full Support</span> : <span class="value">No</span></h4>
								<h4><span class="feature">Duration</span> : <span class="value">Full Time</span></h4>
								<h4><span class="feature">Quantity</span> : <span class="value">500</span></h4>
							</div>
							<div class="price">
								<h4>$0</h4>
							</div>
							<button class="btn btn-block btn-outline-primary" type="submit" onclick="order()">BUY NOW</button>
						</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="ribbon">Best Value</div>
							<div class="heading">
								<h3>PRO</h3>
							</div>
							<p>You can order any number of times and you will have a free delivery service for a span of 60days</p>
							<div class="features">
								<h4><span class="feature">Full Support</span> : <span class="value">Yes</span></h4>
								<h4><span class="feature">Duration</span> : <span class="value">60 Days</span></h4>
								<h4><span class="feature">Quantity</span> : <span class="value">1000</span></h4>
							</div>
							<div class="price">
								<h4>$50</h4>
							</div>
							<button class="btn btn-block btn-primary" type="submit" onclick="order()">BUY NOW</button>
						</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="heading">
								<h3>PREMIUM</h3>
							</div>
							<p>You can order any number of times and you will have a free delivery service for a span of One Year</p>
							<div class="features">
								<h4><span class="feature">Full Support</span> : <span class="value">Yes</span></h4>
								<h4><span class="feature">Duration</span> : <span class="value">120 Days</span></h4>
								<h4><span class="feature">Quantity</span> : <span class="value">Unlimited</span></h4>
							</div>
							<div class="price">
								<h4>$250</h4>
							</div>
							<button class="btn btn-block btn-outline-primary" type="submit" onclick="order()">BUY NOW</button>
						</div>
					</div>
				</div>
			</div>
		</section>
   </section>
   <section id="order">
   <div class="container">
    <h1 class="well">Details of the Card</h1><br>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="#payment" method="post">
					<div class="col-sm-12">
						<div class="row">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Title</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Company</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control" required>
							</div>	
						</div>				
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Phone Number</label>
								<input type="text" placeholder="Enter Phone Number Here.." class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Email Address</label>
								<input type="text" placeholder="Enter Email Address Here.." class="form-control" required>
							</div>	
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Website</label>
								<input type="text" placeholder="Enter Website Name Here.." class="form-control" required>
							</div>		
							<div class="col-sm-3 form-group">
								<label>No of Cards</label>
								<input type="number" id="noofcards" placeholder="Enter No of cards .." class="form-control" required>
							</div>
                            <div class="col-sm-3 form-group">
								<label>Card No:</label>
								<input type="number" id="cardno" placeholder="Enter Card no(1 to 12) .." class="form-control" required>
							</div>	
						</div>	
                    <div class="row">
							<div class="col-sm-4 form-group">
								<label>Paper Quality</label>
								<input type="text" placeholder="Standard or Premium" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Paper Stock</label>
								<input type="text" placeholder="Matte or Glossy" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Corners</label>
								<input type="text" placeholder="Standard or Rounded" class="form-control" required>
							</div>		
						</div>
					<div class="col-sm-6"><input type="submit" class="btn btn-info" onclick="multiplyBy()"></div>
					</div>
				</form> 
				</div>
    	</div>
	</div>
   </section>

   <section id="payment">
   <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 id="result"> Amount To be Paid:450rs</h1>
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" id="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" id="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" id="m" class="form-control" required> <input type="number" placeholder="YY" id="y" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <a href="#"><button type="button" class="subscribe btn btn-primary btn-block shadow-sm" onclick="payment()"> Confirm Payment </button></a>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>State Bank of India</option>
                                <option>Andhra Bank</option>
                                <option>Bank of India</option>
                                <option>Axis Bank</option>
                                <option>Yes bank</option>
                                <option>Indian Bank</option>
                                <option>Union bank of India</option>
                                <option>Canara Bank</option>
                                <option>Andhra pragathi Grameen Bank </option>
                                
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary " onclick="payment2()"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>  
    
   </section>

   <section id="contact">
   <div class="container-fluid px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image">
                <img src="https://lh3.googleusercontent.com/pMk2tty-u4b8nIQ4aPw7nfYy-d11yToR_h2jBpKnCP_3I7bSnQY-eBAXQg-un82QYJdIGtQYEyXlxHRJ=w768-h768-n-o-v1" height="100%">
            </div>
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Contact Form</div>
                <p class="mb-4 text-muted">If you want to contact us..</p>
              </div>


              <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                  <label for="name">Name</label>
                  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <div class="form-floating mb-3">
                  <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                  <label for="emailAddress">Email Address</label>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <label for="message">Message</label>
                  <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="signup.php">signup</a>
                  </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

   </section>
   <footer class="page-footer">
      <div class="container-large">
       <div class="text-center text-md-left mt-8">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h6 class="text-uppercase font-weight-bold">Card Maker</h6>
            <img src="assets/img/logo.jpg" alt="" width="80px" height="40px">
            <p class="mt-2">Online Visiting Card Creation Project helps customer to find different 
            cards according to designs and price. It is designed such a way that one can 
            view designs of cards and create own visiting cards from any place through 
            online.<br><br> The software will help in easy maintaining and updating card designs 
            in the website for the administrator. Also, quick and easy comparison of
            different cards for the customers.</p>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-4 col-sm-1">
            <h6 class="text-uppercase font-weight-bold">Company</h6>
            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px;">
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">About us</a></li>
              <li class="my-2"><a href="#">Learner Stories</a></li>
              <li class="my-2"><a href="#">Our People</a></li>
              <li class="my-2"><a href="#">Jobs</a></li>
            </ul>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-4 col-sm-1">
            <h6 class="text-uppercase font-weight-bold">Our Products</h6>
            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 90px; height: 2px;">
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">Visitng card</a></li>
              <li class="my-2"><a href="#">Bussiness Card</a></li>
              <li class="my-2"><a href="#">Invitation card</a></li>
            </ul>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-4 col-sm-1">
            <h6 class="text-uppercase font-weight-bold">Support</h6>
            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; height: 2px;">
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">Contact us</a></li>
              <li class="my-2"><a href="#">FAQ</a></li>
              <li class="my-2"><a href="#">Any Ideas</a></li>
            </ul>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-4 col-sm-1">
            <h6 class="text-uppercase font-weight-bold">Services</h6>
            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 83px; height: 2px;">
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">New Designs </a></li>
              <li class="my-2"><a href="#">Design Services</a></li>
              <li class="my-2"><a href="#">Projects</a></li>
            </ul>
          </div>
          
        </div>
       </div>
      </div>
      <div class="footer-copyright text-center py-3">
        &copy; <a href="#">DesignNew</a> | Designed By DesignNew Team
      </div>
    </footer>
   <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/user.js"></script>

    <script>
        var noofcards;
        var costofcard;
        var cardno;
        function multiplyBy(){
            noofcards = document.getElementById("noofcards").value;
            costofcard = 0;
            cardno = document.getElementById("cardno").value;
            if(cardno == 1){
                costofcard = 25;
            }
            else if(cardno == 2){
                costofcard = 45;
            }
            else if(cardno == 3){
                costofcard = 22;
            }
            else if(cardno == 4){
                costofcard = 30;
            }
            else if(cardno == 5){
                costofcard = 20;
            }
            else if(cardno == 6){
                costofcard = 32;
            }
            else if(cardno == 7){
                costofcard = 28;
            }
            else if(cardno == 8){
                costofcard = 19;
            }
            else if(cardno == 9){
                costofcard = 40;
            }
            else if(cardno == 10){
                costofcard = 35;
            }
            else if(cardno == 11){
                costofcard = 15;
            }
            else{
                costofcard = 20;
            }
            document.getElementById("result").innerHTML = costofcard * noofcards ;
        } 
        function order(){
            alert("Your Offer is recived..........(^_^)")
        }
    </script>
</body>
</html>