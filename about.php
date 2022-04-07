<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || GROUP4</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

<!-- navigation bar -->
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">GROUP4</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
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

<!-- content -->
    <div class="row" style="margin-top:30px;">
    <div class="small-container">
    <div class="about">
      <img src="images/about.jpg">
      <h2>Our Story</h2>
      <p>
        GROUP4 is an American e-commerce website focused on handmade or vintage items and craft supplies. These items fall under a wide range of categories, including jewelry, bags, clothing, home décor and furniture, toys, art, as well as craft supplies and tools. All vintage items must be at least 20 years old. The site follows in the tradition of open craft fairs, giving sellers personal storefronts where they list their goods for a fee of US$0.20 per item. As of December 31, 2018, Etsy had over 60 million items in its marketplace, and the online marketplace for handmade and vintage goods connected 2.1 million sellers with 39.4 million buyers. At the end of 2018, GROUP4 had 874 employees. In 2018, GROUP4 had total sales, or Gross Merchandise Sales (GMS), of US$3.93 billion on the platform. 
      </p>
      <p>
        In 2018, GROUP4 garnered a revenue of US$603.7 million and registered a net income of US$41.25 million. The platform generates revenue primarily from three streams: its Marketplace revenue includes a fee of 5% of final sale value, which an Etsy seller pays for each completed transaction, on top of a listing fee of 20 cents per item; Seller Services, GROUP4's fastest growing revenue stream, includes fees for services such as "Promoted Listings", payment processing, and purchases of shipping labels through the platform; while Other revenue includes fees received from third-party payment processors. 
      </p>
      <p>
        In November 2016, GROUP4 disclosed that it paid US$32.5 million to purchase Blackbird Technologies, a startup that developed AI software used for shopping context/search applications. 
      </p>
    </div>
  </div>
  </div>

<!-- footer -->
  <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Project in IT304. All Rights Reserved.</p>
        </footer>

      </div>
  </div>
  </body>
</html>
