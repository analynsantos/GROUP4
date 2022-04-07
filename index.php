<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GROUP4</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

  <div class="header">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">GROUP4</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
            if(isset($_SESSION['username'])){
              echo '<li><a href="products.php">Products</a></li>';
              echo '<li><a href="cart.php">View Cart</a></li>';
              echo '<li><a href="orders.php">My Orders</a></li>';
              echo '<li><a href="account.php">My Account</a></li>';
              echo '<li><a href="logout.php">Log Out</a></li>';
            }
            else{
              echo '<li><a href="login.php">Log In</a></li>';
              echo '<li><a href="register.php">Register</a></li>';
            }
          ?>
        </ul>
      </section>
    </nav>
    
    <div class="container">
      <div class="row">
        <div class="col-2">
          <h1>Create<br>your story.</h1>
          <p>pen paper pencil and a cup of tea</p>
          <?php
            if(isset($_SESSION['username'])){
              echo '<a href="products.php" class="btn">Explore Now &#8594</a>';
            }
            else{
              echo '<a href="#" class="btn">Explore Now &#8594</a>';
            }
          ?>
        </div>
        <div class="col-2">
          <img src="images/center_image.jpg">
        </div>
      </div>
    </div>
  </div>

  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="images/Display1.jpg">
        </div>
        <div class="col-3">
          <img src="images/Display2.jpg">
        </div>
        <div class="col-3">
          <img src="images/Display3.jpg">
        </div>
      </div>
    </div>
  </div>

  <div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
    <div class="col-4">
    <a href="outOfStock.php"><img src="images/f1.jpg"></a>
        <h4>Long Life</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$99.99</p>
      </div>
      <div class="col-4">
      <a href="outOfStock.php"><img src="images/f2.jpg"></a>
        <h4>Beautiful Mess</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$150.00</p>
      </div>
      <div class="col-4">
      <a href="outOfStock.php"><img src="images/f3.jpg"></a>
        <h4>Cracked Open</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$119.99</p>
      </div>
      <div class="col-4">
      <a href="outOfStock.php"><img src="images/f4.jpg"></a>
        <h4>Continuous Flow</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$49.99</p>
      </div>
    </div>
  </div>

  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="images/Display4.jpg" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusively Available on GROUP4</p>
          <h1>Crochet Multi-Color</h1>
          <a href="outOfStock.php" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>

  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>These are the best stickers! I highly recommend, they are so cute and high quality. Definitely my go-to sticker shop!</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="images/user-1.png">
          <h3>Gwen Silvers</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>These are the best stickers! I highly recommend, they are so cute and high quality. Definitely my go-to sticker shop!</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-2.png">
          <h3>Scott McCall</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>It came really early. Lovely selection of different width washi tapes- Love the neutral colour and images.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="images/user-3.png">
          <h3>Charlie Damion</h3>
        </div>
      </div>
    </div>
  </div>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Project in IT304. All Rights Reserved.</p>
        </footer>

      </div>
    </div>
  </body>
</html>
