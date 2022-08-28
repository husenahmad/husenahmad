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

  <title>MyPortfolio</title>

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

    .about .content h3 {
      font-weight: 700;
      font-size: 26px;
      color: #173b6c;
    }

    .about .content ul {
      list-style: none;
      padding: 0;
    }

    .about .content ul li {
      margin-bottom: 20px;
      display: flex;
      align-items: center;
    }

    .about .content ul strong {
      margin-right: 10px;
    }

    .about .content ul i {
      font-size: 16px;
      margin-right: 5px;
      color: #149ddd;
      line-height: 0;
    }

    .about .content p:last-child {
      margin-bottom: 0;
    }
  </style>


</head>

<body>

  <!-- main header part start -->

  <div class="main_header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-user"></i>Sunasara Husenahmad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="my_image.png"
            style="border-radius: 25% 75% 75% 25% / 50% 50% 50% 50% " class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3> Designer &amp; Web Developer.</h3>
          <p class="fst-italic">
            My name is Sunasara Husenahmad A.rajak. i Live in Teniwada Village. i am Study for Campus of G.D.Modi Collage B.K.Mehta (I.T.Center) BCA Collage Palanpur. I am a <span style="color: #499DDD; font-weight: 800;">Web-Developer.</span>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>Birthday:</strong> <span>27 August 2004</span>
                </li>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>Website:</strong>
                  <span>www.sunasarahusen.com</span>
                </li>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>Phone:</strong> <span>+91 9157037748</span></li>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>City:</strong> <span>Gujarat, India</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>Age:</strong> <span>18</span></li>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>Degree:</strong> <span>BCA</span></li>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>PhEmailone:</strong>
                  <span>sunasarahusenahmad07.com</span>
                </li>
                <li><i class="fa-solid fa-chevron-right"></i> <strong>Freelance:</strong> <span>Not Available</span>
                </li>
              </ul>
            </div>
          </div>
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut.
            Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
            Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->

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
        <a class="btn btn-primary btn-floating m-1" style="background: linear-gradient(to right, #E53F32, #FBC21C);"
          href="https://www.google.com/webhp?authuser=1" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #ec2f58;"
          href="https://www.instagram.com/sunasarahusen_07/" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
            class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
          href="https://sunasarahusenahmad.github.io/sunasara03" role="button"><i class="fab fa-github"></i></a>
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