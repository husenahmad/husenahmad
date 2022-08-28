<?php

    

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- other link -->
    <link rel="stylesheet" href="main.css">

    <title>contact</title>

    <style>
        body {
            /* font-family: "Open Sans", sans-serif; */
            color: #272829;
        }

        a {
            color: #149ddd;
            text-decoration: none;
        }

        a:hover {
            color: #37b3ed;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }

        section {
            padding: 60px 0;
            overflow: hidden;
            font-family: "Open Sans", sans-serif;
        }

        .section-bg {
            background: #f5f8fd;
        }

        .section-title {
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            color: #173b6c;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 3px;
            background: #149ddd;
            bottom: 0;
            left: 0;
        }

        .section-title p {
            margin-bottom: 0;
        }

        /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
        .contact {
            padding-bottom: 130px;
        }

        .contact .info {
            padding: 30px;
            background: #fff;
            width: 100%;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        }

        .contact .info i {
            font-size: 20px;
            color: #149ddd;
            float: left;
            width: 44px;
            height: 44px;
            background: #dff3fc;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #050d18;
        }

        .contact .info p {
            padding: 0 0 10px 60px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #173b6c;
        }

        .contact .info .email p {
            padding-top: 5px;
        }

        .contact .info .social-links {
            padding-left: 60px;
        }

        .contact .info .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #333;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            margin-right: 10px;
        }

        .contact .info .social-links a:hover {
            background: #149ddd;
            color: #fff;
        }

        .contact .info .email:hover i,
        .contact .info .address:hover i,
        .contact .info .phone:hover i {
            background: #149ddd;
            color: #fff;
        }

        .contact .php-email-form {
            width: 100%;
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        }

        .contact .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .contact .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form .form-group {
            margin-bottom: 15px;
        }

        .contact .php-email-form label {
            padding-bottom: 8px;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
        }

        .contact .php-email-form input {
            height: 44px;
        }

        .contact .php-email-form textarea {
            padding: 10px 15px;
        }

        .contact .php-email-form button[type=submit] {
            background: #149ddd;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #37b3ed;
        }

        @-webkit-keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body>

    <!-- main header part start -->
    <div class="main_header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-user"></i>Sunasara Husenahmad</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars text-danger mt-1"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galary.php">Galary</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="my_btn" type="submit">Message</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- my header hero part ends -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot"></i>
                            <h4>Location:</h4>
                            <p>AT: Teniwada Ta: Vadgam Dist: B.K.</p>
                        </div>

                        <div class="email">
                            <i class="fa-solid fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>sunasarahusenahmad07@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa-solid fa-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 9157037748</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14579.762107394636!2d72.36918717203!3d23.997877154474544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cf307ec99da35%3A0x4906844869e3d144!2sTeniwada%2C%20Gujarat%20385210!5e0!3m2!1sen!2sin!4v1649428861732!5m2!1sen!2sin"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Footer Section =======  -->
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                    href="https://www.facebook.com/profile.php?id=100071508126664" role="button"><i
                        class="fab fa-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;"
                    href="https://twitter.com/Husenahmad07" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1"
                    style="background: linear-gradient(to right, #E53F32, #FBC21C);"
                    href="https://www.google.com/webhp?authuser=1" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ec2f58;"
                    href="https://www.instagram.com/sunasarahusen_07/" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
                    href="https://sunasarahusenahmad.github.io/sunasara03" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: black;">
            © 2022 Copyright :
            <a style=" color: blue; font-weight: bold;" href="https://sunasarahusenahmad.github.io/sunasara03/">Sunasara
                Husenahmad</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End Footer Section -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>