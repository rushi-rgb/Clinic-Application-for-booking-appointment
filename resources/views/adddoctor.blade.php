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

    <style>
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {

            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }

    </style>


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
                    @auth
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endauth
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->



    <section id="contact" class="padd-section wow fadeInUp">

        <div class="container">
            <div class="section-title text-center">
                <h2>Add Doctor</h2>
                <p class="separator">Below</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">

                <form action="{{ route('doctor.store') }}" style="border:1px solid #ccc" method="post">
                    @csrf
                    <div class="container">

                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <label for="name"><b>Doctor Name</b></label>
                        <input type="text" placeholder="Doctor Name" name="name" required>

                        <label for="email"><b>Doctor Email</b></label>
                        <input type="text" placeholder="Doctor Name" name="email" required>

                        <label for="mobile"><b>Doctor Mobile</b></label>
                        <input type="text" placeholder="Doctor Name" name="mobile" required>

                        <label for="password"><b>Doctor Password</b></label>
                        <input type="password" placeholder="Doctor Name" name="password" required>

                        {{-- <label for="email"><b></b></label>
                        <input type="text" placeholder="Doctor Name" name="role" required> --}}

                        <label for="designation"><b>Doctor Designation</b></label>
                        <input type="text" placeholder="Enter Designation" name="designation" required>



                        <div class="clearfix">
                            <a href="/"> <button type="button" class="cancelbtn">Cancel</button></a>
                            <button type="submit" class="signupbtn">Register</button>
                        </div>

                    </div>
                </form>

            </div>


        </div>
        </div>
    </section><!-- #contact -->


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
