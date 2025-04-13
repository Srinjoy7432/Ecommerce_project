<?php 

$con = mysqli_connect("localhost","root","","contactus");

if (!$con) {
    die("<script>alert('Connection Failed.')</script>");
}


error_reporting(0);

session_start();


if (isset($_POST['Submit'])) {
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
  $message = trim($_POST['message']);

	 
			$sql = "INSERT INTO contact (firstname, lastname, email, phone, message) 
      VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";

			if (mysqli_query($con, $sql)) {
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($message)){
        echo "<script>alert('Hurray !!!, Your feedback was sucessfully submitted to the Lets Bake Team');
        window.locaion.href='index.php';
        </script>";
                $firstname = "";
                $lastname = "";
                $email = "";
                $phone = 0;
                $message = "";
      }
    } 
      else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
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

<body>

  <div class="hero_area">

    <!-- header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="about.php">
            <span>
              <h3>
              Let's Bake
              </h3>
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
              <a class="nav-link" href="logout.php"><h5><i class="fa fa-sign-out" aria-hidden="true"></i></h5></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-8 col-lg-5 ">
                  <div class="detail-box">
                    <h1>
                      Luscious Cakes
                    </h1>
                    <p align="justify">
                      Let’s Bake is a new organic bakery specialized in cereals, vital wheat gluten and dairy free products. From last twenty years there has been increasing demand for these bakery products in our website. This website has been shaped so that we people can order cakes and other bakery products for their loved ones. You can share your incredibly valuable views on our bakery, and any kind of suggestions would be highly appreciated.
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-lg-7">
                  <div class="img-box col-lg-10 mx-auto px-0">
                    <img src="Final Images/10.jpg" alt="" width="500" height="400">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Mouth-Watering Cookies
                    </h1>
                    <p align="justify">
                      Let's Bake aims to be a convenient store in the community creating a surrounding atmosphere where customers feel more comfortable and showing regularity on our website. Bakery & Company began baking Confectionery products in low volume bakery facilities. The original handmade pastries, cakes and sandwiches have always used the finest quality. 100% natural healthy ingredients: Highest quality flour, Fresh whole grade A eggs, butter creams and dairy products, pure cane sugar, dark and white chocolates, fresh fruit purees and fillings, the world's finest vanilla and essences.
                    </p>
                  </div>
                </div>
                <div class="col-md-5 col-lg-6">
                  <div class="img-box col-lg-10 mx-auto px-0">
                    <img src="Final Images/6122687.jpg" alt="" width="500" height="400">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Flavoursome Frozen Dessert
                    </h1>
                    <p align="justify">
                      To provide an online bakery system with faster delivery services so that the user can get the product on time and	we did not compromise with the quality of ingredients to serve our users. We aim to passionately produce world class standard bakery and Confectionery products with creativity, high quality ingredients and state of the art machinery in professional standardized procedures.
                    </p>
                  </div>
                </div>
                <div class="col-md-5 col-lg-6">
                  <div class="img-box col-lg-10 mx-auto px-0">
                    <img src="Final Images/16.jpg" alt="" width="500" height="400">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- category section -->

  <section class="cat_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <a href="Birthday_Cakes.php"><img src="Final Images/bir.jpg" alt="" height="350"></a>
              
            </div>
            <div class="detail-box">
              <a href="Birthday_Cakes.php">
                Birthday Cakes
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <a href="weddingcakes.php"><img src="Final Images/wed.jpg" alt="" height="350"></a>
            </div>
            <div class="detail-box">
                <a href="weddingcakes.php">Wedding Cakes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <a href="cookies.php"><img src="Final Images/cookie.jpg" alt="" height="350"></a>
            </div>
            <div class="detail-box">
                <a href="cookies.php">Cookies</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">

    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="Final Images/portfolio-6.jpg" alt="" height="600">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              Our Objective and Speciality
            </h2>
          </div>
          <p align="justify">
            <br/>* We aim in Establishing and maintaining high standards of sanitation and our future aspiration is to donate certain shares of our income in the welfare of our society in the fields like improvement in education, building infrastructure and others.
            <br/><br/>* “What is not to love about Let's Bake is the real question!!! Not only are the cakes professional and beautiful, but they are incredibly tasty. Trust us, you won’t be able to limit yourself to one slice, and you’ll be placing another order soon after.”
            <div class="heading_container">
              <h2>
                Our Vision and Mission
              </h2>
            </div>
            <p align="justify">
              <br/>* To be the world's number one specialty bakery & Confectionery products provider.
              <br/><br/>* To continuously provide a diverse range of world-class bakery, Confectionery and unique specialty products to satisfy all retailers, caterers and business entrepreneur's standard needs and customized requirements.
            </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
       </div>
       <div class="row">
        <div class="col-sm-2 col-md-6 col-lg-4">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="weddingcakes.php">
                  <img src="Final Images/7.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Wedding Cake
                <h6>
                  Starting from ₹ 149<br/>
                  upto 30% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-6 col-lg-4">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="cakes.php">
                <img src="Final Images/cake.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Cakes
                <h6>
                  Starting from ₹ 399
                  <br/>
                  upto 60% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-6 col-lg-4">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="cupcake_all.php">
                  <img src="Final Images/9.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Cupcakes
                <h6>
                  Starting from ₹ 59
                  <br/>
                  upto 10% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-6 col-lg-4">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="Birthday_Cakes.php">
                  <img src="Final Images/14.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Birthday Cakes
                <h6>
                  Starting from ₹ 70
                  <br/>
                  upto 35% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-6 col-lg-4">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="cookies.php">
                  <img src="Final Images/15.jfif" alt="" width="200" height="400">
              </div>
              <div class="detail-box">
                  Cookies
                <h6>
                  Starting from ₹ 59
                  <br/>
                  upto 5% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-6 col-lg-4">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="ice-cream.php">
                  <img src="Final Images/carousel-1.jpg" alt="" width="200" height="400">
              </div>
              <div class="detail-box">
                  Frozen Desserts
                <h6>
                  Starting from ₹ 39
                  <br/>
                  upto 3% off
                </h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
       </div>
       <div class="btn-box">
        <a href="viewall.php">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end product section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Our Customer Reviews
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="Final Images/sohini.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <p align="justify">
                  This bakery is a slice of heaven. All the pastries are beautiful and delicious, and the menu is fantastic, too. Give it a try you won’t be disappointed.
                </p>
                <h6>
                  Sohini Ghosh
                </h6>
                <p>
                  ...
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="Final Images/Ankita.jpg" alt="" class="box-img" width="140" height="140">
              </div>
              <div class="detail-box">
                <p align="justify">
                  Go get these donuts and various pastries. You will not be disappointed as they are the best.Excellent selection of donuts, pastries and cupcakes. If you love sweet treats, you need to visit.
                </p>
                <h6>
                  Ankita Manna
                </h6>
                <p>
                  ...
                </p>
              </div>
            </div>
          </div>
  <div class="item">
    <div class="box">
      <div class="img-box">
        <img src="Final Images/srinjoy.jpg" alt="" class="box-img" width="140" height="140">
      </div>
      <div class="detail-box">
        <p align="justify">
          The cake was absolutely perfect and was super moist but the buttercream stole the show! My wife and I have never had any other come close to the flavor in the frosting.
        </p>
        <h6>
          Srinjoy Sarkar
        </h6>
        <p>
          ...
        </p>
      </div>
    </div>
  </div>
<div class="item">
  <div class="box">
    <div class="img-box">
      <img src="Final Images/sayan.jpg" alt="" class="box-img" width="140" height="140">
    </div>
    <div class="detail-box">
      <p align="justify">
        Had my wedding cookies made and they were beyond perfect. Also everyone at the wedding complimented how good they tasted. Their website is highly recommended.
      </p>
      <h6>
        Sayan Samanta
      </h6>
      <p>
        ...
      </p>
    </div>
  </div>
</div>
<div class="item">
  <div class="box">
    <div class="img-box">
      <img src="Final Images/subho.jpg" alt="" class="box-img">
    </div>
    <div class="detail-box">
      <p align="justify">
        The products are excellent, especially like the pecan cinnamon rolls. We also purchased a champagne cake a couple weeks ago for a birthday that was excellent.
      </p>
      <h6>
        Subhadip Dutta
      </h6>
      <p>
        ...
      </p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>


  <!-- end client section -->

    <!-- contact section -->
    <section class="contact_section layout_padding">

<div class="container">
  <div class="heading_container heading_center">
    <h2>
      Contact Us
    </h2>
  </div>
  <div class="row">
    <div class="col-md-9 mx-auto">
      <div class="form_container">
      <form action="" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="firstname" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
              <input type="text"  name="lastname" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="email"  name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
              <input type="number"  name="phone" placeholder="Phone Number" required>
            </div>
          </div>
          <div class="form-group ">
            <input type="text" class="message-box" name="message" placeholder="Message" required>
          </div>
          <div class="btn-box">
            <button type="submit" name="Submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end contact section -->

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