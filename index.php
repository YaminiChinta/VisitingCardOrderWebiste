<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css"> -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

            body{
                overflow-x: hidden;
                font-family: 'Lato',sans-serif;
                color:#505962;
            }

            .offset:before{
                height:3.8rem;
                margin-top: -3.8rem;
                content:'''' ;
                display: block;
            }

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

            .carousel-item{
                height: 100vh;
            }

            .carousel-caption{
                position: absolute;
                top: 38%;
                text-transform: uppercase;
                width: 100%;
                right: 0;
                left: 0;
            }

            .carousel-caption h1{
                font-size: 3.8rem;
                font-weight: 700;
                letter-spacing: .3rem;
                text-shadow: .1rem .1rem .8rem black;
                padding-bottom: 1rem;
            }

            .btn-lg{
                border-width:medium ;
                border-radius:0 ;
                font-size: 1.1rem;
            }

            h3.heading{
                font-size: 1.9rem;
                font-weight: 700;
                text-transform: uppercase;
                padding-bottom: 1.9rem; 
            }

            .heading-underline{
                width: 3rem;
                height: .2rem;
                background-color: #1ebba3;
                margin: 0 auto 2rem;
            }



            .narrow{
                width: 75%;
                margin: 0 auto;
                padding-top: 2rem;
            }

            .btn-md{
                border-width: medium;
                border-radius: 0;
                padding: .6rem 1.1rem;
                text-transform: uppercase;
                margin: 1rem;
            }

            #team{
                text-align: center;
                padding-bottom: 40px;
            }
            .card{
                margin: 2rem;
            }


            #contact{
                background-color: #40474e;
            }
            footer{
                background-color: #40474e;
                color: white;
                padding: 2rem 0 3rem;
                margin-top: 1rem;
                text-align: center;
            }

            footer img{
                height: 3rem;
                margin: 1.5rem 0;
            }

            footer a{
                color: white;
            }

            footer svg.svg-inline--fa{
                font-size: 1.6rem;
                margin: 1.2rem .5rem 0 0;
            }

            footer svg.svg-inline--fa:hover{
                color: #1ebba3;
            }

            hr.socket{
                border-top: .2rem solid #666b71;
                width: 100%;
            }

        </style>
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive">
        
        <!--Start home section-->
        <div id="home">
            <!--Navigation-->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

                <a class="navbar-brand" href="index.html"><img src="https://www.bizcardmaker.com/images/banner-social.png" width="120px" height="250px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#course">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#design">Sample Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminlogin.php">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userlogin.php">User Login</a>
                        </li>
                    </ul>
                </div>       
                  
            </nav>

            <!--Start Image slider-->
            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="7000">

                <!-- Indicators -->
                <ol class="carousel-indicators" >
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ol>
                
                <!-- The slideshow -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/380-mj-21a4540-eye-l.jpg?w=1200&h=1200&fit=clip&crop=default&dpr=1&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=23771e741fe2252c7a4ce54a763de49d" height="900" width="100%">
                        <div class="carousel-caption text-center">
                            <h1 style="color: black;">Welcome to <br><h4 style="color: black;"> Business Card Maker</h4></h1>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://psdtemplates.com/wp-content/uploads/2016/10/Corporate-Business-Card-PSD-2.jpg" height="900" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="https://creativetacos.com/wp-content/uploads/2018/10/57-2.jpg" width="100%" height="900">
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-next" href="#demo" data-slide="next" role="button">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-prev" href="#demo" data-slide="prev" role="button">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                
            </div>
              
            <!--End Image slider-->

        </div>
        <!--End home section-->

        <!--Start course section-->
        <div id="course" class="offset">
            <div class="col-12 narrow text-center">
                <h1>
                    ABOUT US
                </h1>
                <p class="lead">
                    Online Visiting Card Creation Project helps customer to find different cards according to designs and price. It is designed such a way that one can view designs of cards and create own visiting cards from any place through online. The software will help in easy maintaining and updating card designs in the website for the administrator.Also, quick and easy comparison of different cards for the customers
                    <br>The project allows the user to complete entire procedure online through website and hence saves time of the user. It also provides door delivery service of cards making it much easier for the user. Through this project, the user gets huge choice of cards and also gets virtual view of card.
                </p>
            </div>
        </div> 
        
        <div id="design" class="offset">
            <div class="col-12 text-center">
                <h3 class="heading">Sample Design</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="row padding">
                <div class="col-md-3">
                    <img class="card-img-top" height="400" width="400" src="assets/img/design3.jpg">
                    <div class="card-body">
                        <h4>.......</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <img class="card-img-top" height="400" width="400" src="assets/img/design4.jpg">
                    <div class="card-body">
                        <h4>........</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <img class="card-img-top" height="400" width="400" src="assets/img/design12.jpg">
                    <div class="card-body">
                        <h4>........</h4>
                    </div>
                </div>
                 
                <div class="col-md-3">
                    <img class="card-img-top" height="400" width="400" src="assets/img/design8.jpg">
                    <div class="card-body">
                        <h4>.......</h4>
                    </div>
                </div>
                
            </div>
        </div>
        <!--End team section-->

         <!--Start contact section-->
         <div id="contact" class="offset">
            <footer>
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                        <img src="https://www.bizcardmaker.com/images/banner-social.png">
                        <span><b>Business Card Maker</b></span><br>
                        <strong>Contact Info</strong>
                        <p>(888) 888-8888<br>email@businesscardmaker.com</p>

                        <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <hr class="socket">
                &copy; Business Card Maker
            </footer>
        </div>
        <!--End contact section-->
        
        <!--Start Source File-->
        <!-- <script src="js/._jquery-3.3.1.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script> -->
        <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        <!--End Source File-->
    </body>
</html>