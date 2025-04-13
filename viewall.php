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
          Here you will find wide varieties of<br/><br/>Wedding Cakes, Cupcakes, Birthday Cakes, Cookies, Frozen Desserts<br/><br/>!!!
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="round.php"><img src="wed/round.jpg" alt=""
                  height="200" width="200"></a>
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

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="cake1.php">
                <img src="c/21.jpg" alt=""height="200" width="200">
              </div>
              <div class="detail-box">
                    Exotic Classic Pineapple Heart
                <h6>
                  ₹ 599<br/>10% off
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
                <a href="cake2.php">
                <img src="c/22.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">
                    Exotic Dark Sensation Round
                <h6>
                  ₹ 699<br/>15% off
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
                <a href="cake3.php">
                <img src="c/23.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">
                    Exotic Dutch Chocolate Heart
                <h6>
                  ₹ 799<br/>20% off 
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
                <a href="cake4.php">
                <img src="c/24.jpg" alt=""height="200" width="200">
              </div>
              <div class="detail-box">
                    Golden<br/>Heart
                <h6>
                  ₹ 899<br/>25% off
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
                <a href="cake5.php">
                <img src="c/25.jpg" alt="" width="200"height='200'>
              </div>
              <div class="detail-box">
                    Pineapple<br/>Cake
                <h6>
                  ₹ 699<br/>10% off
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
                <a href="cake6.php">
                <img src="c/26.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">
                    Auto Beautify<br/>Tall N Fancy
                <h6>
                  ₹ 999<br/>60% off
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
                <a href="cake7.php">
                <img src="c/27.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">
                    Choco Ice<br/>Tall N Fancy
                <h6>
                  ₹ 545<br/>15% off
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
                <a href="cake8.php">
                <img src="c/28.jpg" alt=""height="200" width="200">
              </div>
              <div class="detail-box">
                Strawberry Bliss<br/>Tall N Fancy
                <h6>
                  ₹ 425<br/>5% off
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
                <a href="cake9.php">
                <img src="c/29.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">
                    Multi Fresh Fruit Round
                <h6>
                  ₹ 835<br/>15% off
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
                <a href="cake10.php">
                <img src="c/30.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                    Designer Oreo Choco Round
                <h6>
                  ₹ 459<br/>10% off
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
                <a href="cake11.php">
                <img src="c/32.jpeg" alt=""height="200" width="200">
              </div>
              <div class="detail-box">                
                    Choco Divine<br/>Cake
                <h6>
                  ₹ 659<br/>20% off
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
                <a href="cake12.php">
                <img src="c/33.jpeg" alt=""height="200" width="200">
              </div>
              <div class="detail-box">               
                    Butterscotch<br/>Cake
                <h6>
                  ₹ 399<br/>5% off
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
                <a href="cake13.php">
                <img src="c/34.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                    Cushion<br/>Cake
                <h6>
                  ₹ 799<br/>25% off
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
                <a href="cake14.php">
                <img src="c/35.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                 
                    Stripy<br/>Cake
                <h6>
                  ₹ 899<br/>30% off
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
                <a href="cake15.php">
                <img src="c/36.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                    Special Mixed Fruit Cake
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
                <a href="cake16.php">
                <img src="c/37.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                    Rasmalai<br/>Cake
                <h6>
                  ₹ 399<br/>5% off
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
                <a href="cake17.php">
                <img src="c/coff.jpg" alt=""  height="200" width="200">
              </div>
              <div class="detail-box">                        
                  Coffee Delight<br/>Cake 
                <h6>
                  ₹ 699<br/>20% off
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
                <a href="cake18.php">
                <img src="c/39.jpg" alt=""  height="200" width="200">
              </div>
              <div class="detail-box">                
                    Red Velvet<br/>Cake
                <h6>
                  ₹ 899<br/>35% off
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
                <a href="cake19.php">
                <img src="c/chocovan.jpg" alt=""  height="200" width="200">
              </div>
              <div class="detail-box">
                    Eggless Choco Vanilla Cake
                <h6>
                  ₹ 499<br/>15% off
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
                <a href="cake20.php">
                <img src="c/41.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                Chocolate Truffle<br/>Cake
                <h6>
                  ₹ 899<br/>50% off
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
                <a href="cupcake1.php">
                 <img src="cup cake img/cupcake-1.jpg" alt="" height="200" width="200">
                 </div>
                 <div class="detail-box">
                  Apple Pie<br/>Cupcake
                 <h6>
                  ₹ 59<br/>4% off
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
                <a href="cupcake2.php">
                <img src="cup cake img/cupcake-2.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">
                  Butterbeer<br/>Cupcake
                <h6>
                  ₹ 79<br/>5% off
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
                <a href="cupcake3.php">
                <img src="cup cake img/cupcake-3.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Salted Caramel Cupcake                
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
                <a href="cupcake4.php">
                <img src="cup cake img/cupcake-4.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Champagne<br/>cupcakes
                <h6>
                  ₹ 99<br/>10% off
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
                <a href="cupcake5.php">
                <img src="cup cake img/cupcake-5.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Vegan beet<br/>Cupcake
                <h6>
                  ₹ 99<br/>10% off
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
                <a href="cupcake6.php">
                <img src="cup cake img/cupcake-6.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Sangria<br/>Cupcakes
                <h6>
                  ₹ 99<br/>8% off
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
                <a href="cupcake7.php">
                <img src="cup cake img/cupcake-7.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Orange Creme Cupcakes
                <h6>
                  ₹ 59<br/>5% off
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
                <a href="cupcake8.php">
                <img src="cup cake img/cupcake-8.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Ultimate Marble Cupcake
                <h6>
                  ₹ 119<br/>10% off
                </h6>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="cupcake9.php">
                <img src="cup cake img/cupcake-9.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Blackberry Coconut Cupcakes
                <h6>
                  ₹ 119<br/>7% off
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
                <a href="cupcake10.php">
                <img src="cup cake img/cupcake-10.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Homemade Funfetti Cupcake
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
                <a href="cupcake11.php">
                <img src="cup cake img/cupcake-11.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">              
                  Easy Little Pandas Cupcakes
                <h6>
                  ₹ 89<br/>6% off
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
                <a href="cupcake12.php">
                <img src="cup cake img/cupcake-12.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Peanut Butter Fudge Ice Cream Cupcakes
                <h6>
                  ₹ 139<br/>10% off
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
                <a href="cupcake13.php">
                <img src="cup cake img/cupcake-13.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Piña Colada Cupcakes
                <h6>
                  ₹ 99<br/> 8% off
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
                <a href="cupcake14.php">
                <img src="cup cake img/cupcake-14.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Lime Cupcakes
                <h6>
                  ₹ 79<br/>5% off
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
                <a href="cupcake15.php">
                <img src="cup cake img/cupcake-15.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Choco Cola Cupcake
                <h6>
                  ₹ 119<br/>10% off
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
                <a href="cupcake16.php">
                <img src="cup cake img/cupcake-16.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Churro Cupcake
                <h6>
                  ₹ 89<br/>4% off
                </h6>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="cupcake17.php">
                <img src="cup cake img/cupcake-17.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                   Chocoburst Cupcakes
                <h6>
                  ₹ 99<br/>5% off
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
                <a href="cupcake18.php">
                <img src="cup cake img/cupcake-18.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">               
                  Rainbow Cupcakes
                <h6>
                  ₹ 119<br/>10% off
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
                <a href="cupcake19.php">
                <img src="cup cake img/cupcake-19.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Red Velvet Cupcakes
                <h6>
                  ₹ 99<br/>5% off
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
                <a href="cupcake20.php">
                <img src="cup cake img/cupcake-20.jpg" alt="" height="200" width="200">
              </div>
              <div class="detail-box">                
                  Cranberry Cupcakes
                <h6>
                  ₹ 99<br/>4% off
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
                <a href="19.php">
                <img src="bi/1b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Rainbow Mango Cake
                <h6>
                  ₹ 70<br/>3% off
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
                <a href="s1.php">
                <img src="bi/2b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  White Forest Cake
                <h6>
                  ₹ 90<br/>5% off
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
                <a href="s2.php">
                <img src="bi/3b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Chocolate Volcano
                <h6>
                  ₹ 100<br/>4% off
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
                <a href="s3.php">
                <img src="bi/4b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Black Forest Cake
                <h6>
                  ₹ 250<br/>7% off
                </h6>
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3" width="200" height="200">
          <div class="box">
            <div>
              <div class="img-box">
                <a href="s4.php">
                <img src="bi/5b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Mousse Cake
                <h6>
                  ₹ 90<br/>5% off
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
                <a href="s5.php">
                <img src="bi/6b.jpeg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Choco Lava Cake
                <h6>
                  ₹ 120<br/>8% off
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
                <a href="s6.php">
                <img src="bi/7b.jfif" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Ice Cream Cake
                <h6>
                  ₹ 80<br/>4% off
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
                <a href="s7.php">
                <img src="bi/8b.webp" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Cocount Cake
                <h6>
                  ₹ 130<br/>7% off
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
                <a href="s8.php">
                <img src="bi/9b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                 Kitkat Cake
                <h6>
                  ₹ 130<br/>5% off
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
                <a href="s9.php">
                <img src="bi/10b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Hat Pink Cake
                <h6>
                  ₹ 110<br/>6% off
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
                <a href="s10.php">
                <img src="bi/11b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Chocolate Truffle 
                <h6>
                  ₹ 150<br/>10% off
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
                <a href="s11.php">
                <img src="bi/12b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Ferrero Rocher
                <h6>
                  ₹ 150<br/>6% off
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
                <a href="s12.php">
                <img src="bi/13b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Butterscotch Cake
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
                <a href="s13.php">
                <img src="bi/14b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Blueberry Cake
                <h6>
                  ₹ 110<br/>4% off
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
                <a href="s14.php">
                <img src="bi/17b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Brownie Cake
                <h6>
                  ₹ 130<br/>5% off
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
                <a href="s15.php">
                <img src="bi/18b.jfif" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Up side down cake
                <h6>
                   ₹ 150<br/>6% off
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
                <a href="s16.php">
                <img src="bi/choc.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Chocolate cake
                <h6>
                  ₹ 160<br/>8% off
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
                <a href="s17.php">
                <img src="bi/20b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Custard cake
                <h6>
                  ₹ 115<br/>3% off
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
                <a href="s18.php">
                <img src="bi/15b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Tiramisu Cake
                <h6>
                  ₹ 135<br/>5% off
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
                <a href="s19.php">
                <img src="bi/19b.jpg" alt="" width="200" height="200">
              </div>
              <div class="detail-box">
                  Mirror Cake
                <h6>
                ₹ 125<br/>7% off
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

        <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="Almond-coc.php"><img src="ice-cream/coconut-almond-chocolate-ice-cream.jpg" alt="" width="200" height="200"></a>
            </div>
            <div class="detail-box">
              <a href="Almond-coc.php">
                Almond Chocolate Coconut Ice cream
              <h6>
                ₹ 129<br/>3% off
              </h6>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="Black-Che.php"><img src="ice-cream/ice2.jpg" alt="" width="200" height="400"></a>
            </div>
            <div class="detail-box">
              <a href="Black-Che.php">
                Black Cherry<br/>Ice cream
              <h6>
                ₹ 79<br/>3% off
              </h6>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="BlueBerry_cheese.php"><img src="ice-cream/ice3.jpg" alt="" width="200" height="400"></a>
            </div>
            <div class="detail-box">
              <a href="BlueBerry_cheese.php">
                Blueberry CheeseCake<br/>Ice Cream
              <h6>
                ₹ 89<br/>2% off
              </h6>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="butter-scotch.php"><img src="ice-cream/ice4.jpg" alt="" width="200" height="400"></a>
            </div>
            <div class="detail-box">
              <a href="butter-scotch.php">
                ButterScotch Ice Cream
              <h6>
                ₹ 69<br/>2% off
              </h6>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="butter-pecan.php">
              <img src="ice-cream/ice5.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Butter Pecan Ice Cream
              <h6>
                ₹ 59<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="bacon.php">
              <img src="ice-cream/ice6.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
               Bacon<br/>Ice Cream
              <h6>
                ₹ 49<br/>3% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="choc-sprink.php">
              <img src="ice-cream/ice7.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Chocolate Ice Cream with sprinkles
              <h6>
                ₹ 39<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="caramel.php">
              <img src="ice-cream/mango-caramel-dessert-dessert-food-sweet.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Caramel<br/>Ice Cream
              <h6>
                ₹ 89<br/>3% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="chrry.php">
              <img src="ice-cream/ice9.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Cherry Vanilla<br/>Ice Cream
              <h6>
                ₹ 59<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="coffeecookie.php">
              <img src="ice-cream/coffee and cookie ice cream.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Coffee and Cookie<br/>Ice Cream
              <h6>
                ₹ 89<br/>3% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="carrot.php">
              <img src="ice-cream/carrot cake ice cream.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Carrot Cake<br/>Ice Cream
              <h6>
                ₹ 59<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="englishtoffee.php">
              <img src="ice-cream/english toffee ice cream.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                English Toffee<br/>Ice Cream
              <h6>
                ₹ 99<br/>3% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="persimmon.php">
              <img src="ice-cream/persimmom.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box"> 
                Persimmon<br/>Ice Cream
              <h6>
                ₹ 49<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="pomeice.php">
              <img src="ice-cream/pomegra.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Pomegranate<br/>Ice Cream
              <h6>
                ₹ 65<br/>2% of
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="peachice.php">
              <img src="ice-cream/peach straciatella.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Peach Straciatella<br/>Ice Cream
              <h6>
                ₹ 75<br/>3% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="rainbow.php">
              <img src="ice-cream/rainbow sherbet.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Rainbow Sherbet<br/>Ice Cream
              <h6>
                ₹ 55<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="Straw-choc.php">
              <img src="ice-cream/strawberry chocolate.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Strawberry Chocolate<br/>Ice Cream
              <h6>
                ₹ 85<br/>3% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="triple-choc.php">
              <img src="ice-cream/triple.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Triple Chocolate<br/>Ice Cream
              <h6>
                ₹ 65<br/>2% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="White-choc-truffle.php">
              <img src="ice-cream/white.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                White Chocolate Truffle Ice Cream
              <h6>
                ₹ 55<br/>1% off
              </h6>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-8 col-lg-3">
        <div class="box">
          <div>
            <div class="img-box">
              <a href="Banana.php">
              <img src="ice-cream/banana.jpg" alt="" width="200" height="400">
            </div>
            <div class="detail-box">
                Banana Bread<br/>Ice Cream
              <h6>
                ₹ 69<br/>3% off
              </h6>
            </a>
            </div>
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