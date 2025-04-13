<?php 

session_start();



?>



<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="Final Images/own.jpg" type="">

  <title> Let's Bake </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
            Let's Bake
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"><h6><b>Home</b></h6><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"><h6><b>About Us</b></h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php"><h6><b>Products</b></h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><h6><b>Contact Us</b></h6></a>
              </li>
              <li class="nav-item">
              <?php
                $count=0;
                  if(isset($_SESSION['cart']))
                  {
                    $count=count($_SESSION['cart']);
                  }
                ?>
                <a class="nav-link" href="mycart.php"><h6>
                (<?php echo $count; ?>)
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                </h6>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><h6><?php echo "<i class='fa fa-user' ></i> " . $_SESSION['username'];?></h6></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php"><h6><i class="fa fa-sign-out" aria-hidden="true"></i></h6></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Wide Range of "Wedding Cakes" !!!
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="round.php"><img src="wed/round.jpg" alt=""
                  height="300" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="round.php">
                  Round Shape Cake
                <h6>
                  ₹ 349<br/>10% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="marbel.php"><img src="wed/marble.jfif" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="marbel.php">
                  Marbel Print Cake
                <h6>
                  ₹ 149<br/>3% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="ruffle.php"><img src="wed/pic6.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="ruffle.php">
                  Ruffle Style Cake
                <h6>
                  ₹ 249<br/>5% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="drip.php"><img src="wed/pic7.png" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="drip.php">
                  Drip Cake
                <h6>
                  ₹ 339<br/>6% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="vanila.php"><img src="wed/pic5.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="vanila.php">
                  Vanilla Cake
                <h6>
                  ₹ 499<br/>10% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="ombre.php"><img src="wed/ombre.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="ombre.php">
                  Ombre Cake
                <h6>
                  ₹ 229<br/>4% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="fruit.php"><img src="wed/fruit.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="fruit.php">
                  Fruit Topping Cake
                <h6>
                  ₹ 179<br/>3% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="boho.php"><img src="wed/boho.png" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="boho.php">
                  Boho Style Cake
                <h6>
                  ₹ 455<br/>5% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="orange.php"><img src="wed/orange.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="orange.php">
                 Pops of Painted Orange Cake
                <h6>
                  ₹545<br/>9% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="italy.php"><img src="wed/italy4.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="italy.php">
                  Italian Tile<br/>Cake
                <h6>
                  ₹ 649<br/>15% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="red.php"><img src="wed/red1.webp" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="red.php">
                  Red Velvet<br/>Cake
                <h6>
                  ₹ 670<br/>10% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="pavlova.php"><img src="wed/pav.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="pavlova.php">
                  Pavlova<br/>Cake
                <h6>
                  ₹ 540<br/>5% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="2.php"><img src="wed/2t.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="2.php">
                  2 Tier Cake
                <h6>
                  ₹ 435<br/>6% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="3t.php"><img src="wed/3t.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="3t.php">
                  3 Tier Cake
                <h6>
                  ₹ 669<br/>15% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="4t.php"><img src="wed/4t.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="4t.php">
                  4 Tier Cake
                <h6>
                  ₹ 775<br/>30% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="butter.php"><img src="wed/butter.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="butter.php">
                  ButterCream Cake
                <h6>
                  ₹ 425<br/>10% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="bundt.php"><img src="wed/bundt.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="bundt.php">
                  Bundt<br/>Cake
                <h6>
                  ₹ 355<br/>5% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="april.php"><img src="wed/spring.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="april.php">
                  April- The Spring Style Cake
                <h6>
                  ₹ 675<br/>20% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="mos.php"><img src="wed/mos.jpg" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="mos.php">
                  Mosaic Style<br/>Cake
                <h6>
                  ₹ 695<br/>25% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="uni.php"><img src="wed/uniq2.png" alt=""
                  height="200" width="200"></a>
              </div>
              <div class="detail-box">
                <a href="uni.php">
                  The Unique One<br/>Cake
                <h6>
                  ₹ 499<br/>10% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end product section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Reach us at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Brainware University, Barasat
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 8442947729
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  weareletsbake2022@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <p>
              Serving at your Doorstep <br/> Reach out to us at :
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="footer-info">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By<br/>
            <a href="about.php">Let's Bake Pvt. Ltd.</a>
          </p>
        </div>
        <div class="footer_detail">
          <a href="about.php" class="footer-logo">
            Let's Bake
          </a>
          "We are exactly what you are looking for. We bring to you an online cake delivery service where you can purchase and order your favorite cakes - creating a unique bakery shopping experience without having to hop from one shop or website to another looking for your desired cake."
        </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
      
</body>
</html>