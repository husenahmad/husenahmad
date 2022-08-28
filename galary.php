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

    <title>Galary</title>

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

        @media (max-width: 768px) {
            #galary_media_none {
                display: none;
            }

        }
    </style>

</head>

<body>

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

    <!-- ======= Galary Section ======= -->
    <section id="galary" class="galary d-lg-none">
        <div class="container">

            <div class="section-title">
                <h2>Galary</h2>
            </div>

            <div class="images">
                <img src="img7.png" width="350px" height="350px"
                    class="float-start img1"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem 0 0 1.2rem;" alt="...">
                <img src="img2.png" width="350px" height="350px"
                    class=" float-end img2"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem; margin-right: 1.2rem;"
                    alt="...">
            </div>

            <div class="images">
                <img src="img3.png" width="350px" height="350px"
                    class="float-start img3"
                    style="border-radius:50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem 0 0 1.2rem;" alt="...">
                <img src="img4.png" width="350px" height="350px"
                    class="float-end img4"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem; margin-right: 1.2rem;"
                    alt="...">
            </div>

            <div class="images">
                <img src="img5.png" width="350px" height="350px"
                    class="float-start img4"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem 0 0 1.2rem;" alt="...">
                <img src="img6.png" width="350px" height="350px"
                    class="float-end img6"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem; margin-right: 1.2rem;"
                    alt="...">
            </div>

            <div class="images">
                <img src="myimage111.jpg" width="350px" height="350px"
                    class="float-start img7"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem 0 0 1.2rem;" alt="...">
                <img src="img8.png" width="350px" height="350px"
                    class="float-end img8"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin: 1.5rem; margin-right: 1.2rem;"
                    alt="...">
            </div>

        </div>

    </section>
    <!-- End Galary Section -->

    <!-- ======= Galary Section ======= -->
    <section id="galary_media_none" class="galary">
        <div class="container">

            <div class="section-title">
                <h2>Galary</h2>
            </div>

            <div class="images">
                <img src="img7.png" width="350px" height="350px"
                    class="float-start img1" style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;" alt="...">
                <img src="img2.png" width="350px" height="350px"
                    class=" float-end img2" style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;" alt="...">
            </div>

            <div class="mt-5 images">
                <img src="img3.png" width="350px" height="350px"
                    class="float-start img3"
                    style="border-radius:50% 50% 50% 50% / 50% 50% 50% 50% ; margin-top: 20rem;" alt="...">
                <img src="img4.png" width="350px" height="350px"
                    class="float-end img4" style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin-top: 21rem;"
                    alt="...">
            </div>

            <div class="mt-5 images">
                <img src="img5.png" width="350px" height="350px"
                    class="float-start img4" style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;" alt="...">
                <img src="img6.png" width="350px" height="350px"
                    class="float-end img6"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin-top: 21rem; " alt="...">
            </div>

            <div class="mt-5 images">
                <img src="myimage111.jpg" width="350px" height="350px"
                    class="float-start img7"
                    style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ; margin-top: 21rem;" alt="...">
                <img src="img8.png" width="350px" height="350px"
                    class="float-end img8" style="border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;" alt="...">
            </div>

        </div>

    </section>
    <!-- End Galary Section -->

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