<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CLINIC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="header header-hide">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto"><span></span>CLINIC</a></h1>

            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#bottom">About</a></li>
                    @auth
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endauth
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero" class="wow fadeIn">
        <div class="hero-container">

            <div class="card">
                <h5 class="card-header">Patient Info</h5>
                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Name:</th>
                            <td class="p-2">{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td class="p-2">{{auth()->user()->email}}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number:</th>
                            <td class="p-2">{{auth()->user()->mobile}}</td>
                        </tr>
                        <tr>
                            <th>With us From:</th>
                            <td class="p-2">{{auth()->user()->created_at->diffForHumans()}}</td>
                        </tr>
                    </table>

                    <a href="{{ route('user.appointments') }}" class="btn btn-primary">My Appointments</a>

                    <form action="{{ route('user.appointment') }}" style="border:1px solid #ccc; margin-top: 50px;" method="post">
                        @csrf
                        <div class="container">
                            
                            <label for="doctor" style="margin-top: 20px;"><b>Select Doctor</b></label>
                            <select name="doctor" class="form-control" style="margin-top: 5px;">
                                @foreach($doctors as $doctor) 
                                    <option value="{{ $doctor->id }}">{{  $doctor->user->name }} ({{$doctor->Designation}})</option>
                                @endforeach
                            </select>
    
                            <label for="problem" style="margin-top: 20px;"><b>Problem</b></label>
                            <div>              
                                <textarea placeholder="Enter Your problem" style="margin-top: 5px;" name="problem" rows="6" cols="80" required></textarea>
                            </div>
    
                            <input type="submit" class="btn-get-started scrollto"  value="Book Appoinment"/>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section><!-- #hero -->



    <!--==========================
    Footer
  ============================-->
    <footer class="footer">
        <div class="container">
            <div class="row" id="bottom">

                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">

                        <a class="navbar-brand" href="#">CLINIC</a>
                        <p>



                            “A doctor, like anyone else who has to deal with human beings, each of them unique, cannot
                            be a scientist; he is either, like the surgeon, a craftsman, or, like the physician and the
                            psychologist, an artist. This means that in order to be a good doctor a man must also have a
                            good character, that is to say, whatever weaknesses and foibles he may have
                        </p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Support</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">faq</a></li>
                            <li><a href="#">Editor help</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>



    </footer>



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/modal-video/js/modal-video.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>
