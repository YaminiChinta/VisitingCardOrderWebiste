<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <style>

.offset:before{
                height:3.8rem;
                margin-top: -3.8rem;
                content:'''' ;
                display: block;
            }

            <!--navbar-->
            .navbar{
                text-transform: uppercase;
                font-weight: 700;
                font-size: .9rem;
                letter-spacing: .1rem;
                background: rgba(0, 0, 0, .6)!important;
            }

            .navbar-brand img{
                height: 2rem;
            }

            .navbar-nav li{
                padding-right: .7rem;
            }

            .navbar-dark .navbar-nav .nav-link{
                color: white;
                padding-top: .8rem;
            }

            .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link:hover{
                color: #1ebba3;
            }

            .card1 {
                height: 50vh;
                background-color: #fff;
                border-radius: 10px;
                border: none;
                position: relative;
                margin-bottom: 30px;
                box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
            }
            .l-bg-cherry {
                background: linear-gradient(to right, #493240, #f09) !important;
                color: #fff;
            }

            .l-bg-blue-dark {
                background: linear-gradient(to right, #373b44, #4286f4) !important;
                color: #fff;
            }

            .l-bg-green-dark {
                background: linear-gradient(to right, #0a504a, #38ef7d) !important;
                color: #fff;
            }

            .l-bg-orange-dark {
                background: linear-gradient(to right, #a86008, #ffba56) !important;
                color: #fff;
            }

            .card1 .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
                font-size: 110px;
            }

            .card1 .card-statistic-3 .card-icon {
                text-align: center;
                line-height: 50px;
                margin-left: 15px;
                margin-top: 100px;
                color: #000;
                position: absolute;
                right: -5px;
                top: 20px;
                opacity: 0.1;
            }

            .l-bg-cyan {
                background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
                color: #fff;
            }

            .l-bg-green {
                background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
                color: #fff;
            }

            .l-bg-orange {
                background: linear-gradient(to right, #f9900e, #ffba56) !important;
                color: #fff;
            }

            .l-bg-cyan {
                background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
                color: #fff;
            }

                            .table-responsive-stack tr {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                    -ms-flex-direction: row;
                        flex-direction: row;
                }


                .table-responsive-stack td,
                .table-responsive-stack th {
                display:block;
                /*      
                flex-grow | flex-shrink | flex-basis   */
                -ms-flex: 1 1 auto;
                    flex: 1 1 auto;
                }

                .table-responsive-stack .table-responsive-stack-thead {
                font-weight: bold;
                }

                @media screen and (max-width: 768px) {
                .table-responsive-stack tr {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                        -ms-flex-direction: column;
                            flex-direction: column;
                    border-bottom: 3px solid #ccc;
                    display:block;
                    
                }
                /*  IE9 FIX   */
                .table-responsive-stack td {
                    float: left\9;
                    width:100%;
                }
                }

                footer{
    
    height: 360px;
    color: rgb(112, 184, 243);
    position: relative;
}
footer h6{
    color: rgb(44, 41, 41);
}
footer p{
    color: rgb(51, 49, 49);
}
footer .container-large{
    margin: 25px;
}
footer .feed{
    height: 50px;
    color: #c76262;
    background-color: rgb(15, 15, 15);
    border: black;
    font-size: small;
}
footer .feed::placeholder{
    color: #bb3232;
}
footer .feed:focus{
    background-color: black;
}
        </style>
    
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive">
        <div id="home" class="offset">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

                <a class="navbar-brand" href="admin.html"><img src="https://www.bizcardmaker.com/images/banner-social.png" width="100px" height="100px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#neworders">New Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#allorders">All Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">LogOut</a>
                        </li>
                    </ul>
                </div>       
                  
            </nav>

            <br><br>

            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="5000">

                <!-- Indicators -->
                <ol class="carousel-indicators" >
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ol>
                
                <!-- The slideshow -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active align-items-center">
                        <!-- <div class="carousel-caption text-center"> -->
                        <div class="card1 l-bg-cherry">
                            <div class="card-statistic-3 p-4">
                                <br><br><br>
                                <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">New Orders</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            3,243
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                    </div>
                    <div class="carousel-item">
                        <div class="card1 l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <br><br><br>
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Customers</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            15.07k
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card1 l-bg-orange-dark">
                            <div class="card-statistic-3 p-4">
                                <br><br><br>
                                <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Revenue Today</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            $11.61k
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev" role="button">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next" role="button">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>

        <div id="neworders" class="offset">
            <div class="container">

                <h2 class="text-center">NEW ORDERS</h2>
                <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
                   <thead class="thead-dark">
                      <tr>
                         <th>ORDER ID</th>
                         <th>CUSTOMER NAME</th>
                         <th>DESIGN OF CARD</th>
                         <th>NO OF CARDS</th>
                         <th>TOTAL PRICE</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>1234</td>
                         <td>Ramesh</td>
                         <td><img src="assets/img/design4.jpg" width="200px" height="150px"></td>
                         <td>500</td>
                         <td>2500</td>
                      </tr>
                      <tr>
                        <td>4506</td>
                        <td>Suresh</td>
                        <td><img src="assets/img/design5.jpg" width="200px" height="150px"></td>
                        <td>700</td>
                        <td>7000</td>
                      </tr>
                      <tr>
                        <td>9075</td>
                        <td>Aditi</td>
                        <td><img src="assets/img/design6.jpg" width="200px" height="150px"></td>
                        <td>1000</td>
                        <td>5000</td>
                      </tr>
                      <tr>
                        <td>4545</td>
                        <td>Raju</td>
                        <td><img src="assets/img/design7.jpg" width="200px" height="150px"></td>
                        <td>250</td>
                        <td>1250</td>
                      </tr>
                      <tr>
                        <td>3080</td>
                        <td>Ravi</td>
                        <td><img src="assets/img/design8.jpg" width="200px" height="150px"></td>
                        <td>600</td>
                        <td>4200</td>
                      </tr>
                   </tbody>
                </table>
                
            </div>
        </div><hr>

        <div id="allorders" class="offset">
            <div class="container">

                <h2 class="text-center">ALL ORDERS</h2>
                <table class="table table-bordered table-striped table-responsive-stack" id="tableTwo">
                    <thead class="thead-dark">
                        <tr>
                           <th>ORDER ID</th>
                           <th>CUSTOMER NAME</th>
                           <th>DESIGN OF CARD</th>
                           <th>NO OF CARDS</th>
                           <th>TOTAL PRICE</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1234</td>
                           <td>Ramesh</td>
                           <td><img src="assets/img/design11.jpg" width="200px" height="150px"></td>
                           <td>500</td>
                           <td>2500</td>
                        </tr>
                        <tr>
                          <td>4506</td>
                          <td>Suresh</td>
                          <td><img src="assets/img/design10.jpg" width="200px" height="150px"></td>
                          <td>700</td>
                          <td>7000</td>
                        </tr>
                        <tr>
                          <td>9075</td>
                          <td>Aditi</td>
                          <td><img src="assets/img/design9.jpg" width="200px" height="150px"></td>
                          <td>1000</td>
                          <td>5000</td>
                        </tr>
                        <tr>
                          <td>4545</td>
                          <td>Raju</td>
                          <td><img src="assets/img/design8.jpg" width="200px" height="150px"></td>
                          <td>250</td>
                          <td>1250</td>
                        </tr>
                        <tr>
                          <td>3080</td>
                          <td>Ravi</td>
                          <td><img src="assets/img/design7.jpg" width="200px" height="150px"></td>
                          <td>600</td>
                          <td>4200</td>
                        </tr>
                        <tr>
                            <td>7340</td>
                            <td>Poojitha</td>
                            <td><img src="assets/img/design6.jpg" width="200px" height="150px"></td>
                            <td>450</td>
                            <td>2250</td>
                        </tr>
                        <tr>
                            <td>6666</td>
                            <td>Megha</td>
                            <td><img src="assets/img/design5.jpg" width="200px" height="150px"></td>
                            <td>100</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>6666</td>
                            <td>Rani</td>
                            <td><img src="assets/img/design4.jpg" width="200px" height="150px"></td>
                            <td>1000</td>
                            <td>5000</td>
                        </tr>
                        <tr>
                            <td>4567</td>
                            <td>Anitha</td>
                            <td><img src="https://www.teahub.io/photos/full/109-1099230_beauty-parlour-visiting-card-design-psd.jpg" width="200px" height="150px"></td>
                            <td>300</td>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <td>4009</td>
                            <td>Sundar</td>
                            <td><img src="https://www.pikpng.com/pngl/m/460-4605274_business-card-gold-template-metal-png-image-with.png" width="200px" height="150px"></td>
                            <td>350</td>
                            <td>3500</td>
                        </tr>
                     </tbody>
                </table>
                
            </div>
        </div>

        <br><hr><br>
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

        <script>
            $(document).ready(function() {

            
            $('.table-responsive-stack').each(function (i) {
            var id = $(this).attr('id');
            //alert(id);
            $(this).find("th").each(function(i) {
                $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
                $('.table-responsive-stack-thead').hide();
                
            });
            
            });


            $( '.table-responsive-stack' ).each(function() {
            var thCount = $(this).find("th").length; 
            var rowGrow = 100 / thCount + '%';
            //console.log(rowGrow);
            $(this).find("th, td").css('flex-basis', rowGrow);   
            });

            function flexTable(){
            if ($(window).width() < 768) {
            
            $(".table-responsive-stack").each(function (i) {
            $(this).find(".table-responsive-stack-thead").show();
            $(this).find('thead').hide();
            });
            
            
            // window is less than 768px   
            } else {
                
            $(".table-responsive-stack").each(function (i) {
            $(this).find(".table-responsive-stack-thead").hide();
            $(this).find('thead').show();
            });
        
            }
            // flextable   
            }      
            flexTable();

            window.onresize = function(event) {
            flexTable();
            };
            // document ready  
            });

        </script>
    </body>
</html>