<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

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
          Wide Variety of tempting "Cookies"
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="buynow.php">
                <img src="c/6.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Snickerdoodles<br/>Cookie
                <h6>
                  ₹ 59<br/>2% off
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
                <a href="buynow2.php">
                <img src="c/2.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Oatmeal Raisin Cookies
                <h6>
                  ₹ 69<br/>3% off
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
                <a href="3.php">
                <img src="c/3.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Gingersnaps<br/>Cookies
                <h6>
                  ₹ 79<br/>4% off
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
                <a href="4.php">
                <img src="c/4.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Shortbread<br/>Cookies
                <h6>
                  ₹ 89<br/>5% off
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
                <a href="5.php">
                <img src="c/5.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Peanut Butter<br/>Cookies
                <h6>
                  ₹ 99<br/>2% off
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
                <a href="6.php">
                <img src="c/chococook.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Chocolate Chip Cookies
                <h6>
                  ₹ 130<br/>4% off
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
                <a href="7.php">
                <img src="c/blackandwhite.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Black and White Cookies
                <h6>
                  ₹ 145<br/>5% off
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
                <a href="8.php">
                <img src="c/8.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Fortune<br/>Cookies
                <h6>
                  ₹ 125<br/>3% off
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
                <a href="9.php">
                <img src="c/10.webp" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">              
                    Whoopie Pies
                <h6>
                  ₹ 135<br/>2% off
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
                <a href="10.php">
                <img src="c/11.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Sugar Cookies
                <h6>
                  ₹ 110<br/>3% off
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
                <a href="11.php">
                <img src="c/12.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Molasses Cookies
                <h6>
                  ₹ 150<br/>5% off
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
                <a href="12.php">
                <img src="c/13.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Biscotti Cookies
                <h6>
                  ₹ 150<br/>5% off
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
                <a href="13.php">
                <img src="c/14.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Snowball Cookies
                <h6>
                  ₹ 160<br/>5% off
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
                <a href="14.php">
                <img src="c/15.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Macarons Cookies
                <h6>
                  ₹ 110<br/>3% off
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
                <a href="15.php">
                <img src="c/16.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">               
                    Drop Cookies
                <h6>
                  ₹ 130<br/>2% off
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
                <a href="16.php">
                <img src="c/17.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Gingerbread Cookies
                <h6>
                  ₹ 150<br/>5% off
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
                <a href="17.php">
                <img src="c/19.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                  Jam-Filled<br/>Cookies
                <h6>
                  ₹ 160<br/>5% off
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
                <a href="18.php">
                <img src="c/18.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Pinwheel<br/>Cookies
                <h6>
                  ₹ 115<br/>4% off
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
                <a href="PeaButBlo.php">
                <img src="c/20.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                    Peanut Butter Blossoms
                <h6>
                  ₹ 135<br/>4% off
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
                <a href="20.php">
                <img src="c/42.jpg" alt="" width='200'height='200'>
              </div>
              <div class="detail-box">                
                 Meringue<br/>Cookies
                <h6>
                  ₹ 125<br/>3% off
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