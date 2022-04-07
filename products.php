<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
  include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || GROUP4</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
      datalist {
        display: none;
      }

      input::-webkit-calendar-picker-indicator {
        display: none;
      }

      .form-inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
      }
    </style>
  </head>
  <body>

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
              echo '<li class="active"><a href="products.php">Products</a></li>';
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

    <div class="row" style="margin-top:10px;">
    <form action="search.php" method="POST" class="form-inline">
      <input style="width:400px;" type="text" id="txt" name="txt" list="product">
      <input type="submit" value="SEARCH" class="btn" style="border-radius:5px;margin-top:14px;width:110px;height:35px;margin-left:10px;">
      <datalist id="product">
        <?php
          $sql = "select * from products";
          $query = mysqli_query($mysqli, $sql);
        
          while ($row = mysqli_fetch_assoc($query)) {
            $product_name = $row['product_name'];

            echo "<option>$product_name</option>";
          }
        ?>
      </datalist>
    </form>
    </div>

      <div class="small-12">
      <!-- this part retrieves all data from product table -->
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Inclusion</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Set)</strong>: '.$currency.$obj->price.'</p>';

              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }
          }

          $_SESSION['product_id'] = $product_id;

          echo '</div>';
          echo '</div>';
          ?>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Project in IT304. All Rights Reserved.</p>
        </footer>
      </div>
    </div>
  </body>
</html>
