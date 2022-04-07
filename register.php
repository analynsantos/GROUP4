<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
  if (isset($_SESSION["username"])) {header ("location:index.php");}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || GROUP4</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      .noselect {
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; 
      }
    </style>
  </head>
  <body onload="cap()" class="noselect">

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
              echo '<li class="active"><a href="register.php">Register</a></li>';
            }
          ?>
        </ul>
      </section>
    </nav>

<!-- this part only receive input then throw to insert for processing  -->
    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
      
    <label style="margin-left:400px;">Enter Captcha:</label>
    <form action="insert.php" method="post">
      <input name="data" onmousedown="return false" onselectstart="return false" style="width:200px; margin-left:340px; text-align: center;" type="text" class="form-control" readonly id="capt">
      <input name="input" style="width:200px; margin-left:340px;" type="text" class="form-control" id="textinput">
      <a style="margin-left:420px;" href="#" onclick="cap()">Refresh</a>
    </form>
			
      <!-- this is the script for captcha -->
      <!-- this is just a randomizer from the given characters -->
      <!-- 6 random characters and then concat to a single variable -->
    <script type="text/javascript">
      function cap(){
      var alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
                  ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
                  'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', '!','@','#','$','%','^','&','*','+'];
      var a = alpha[Math.floor(Math.random()*71)];
      var b = alpha[Math.floor(Math.random()*71)];
      var c = alpha[Math.floor(Math.random()*71)];
      var d = alpha[Math.floor(Math.random()*71)];
      var e = alpha[Math.floor(Math.random()*71)];
      var f = alpha[Math.floor(Math.random()*71)];

        var final = a+b+c+d+e+f;
        document.getElementById("capt").value=final;
      }
    </script>

            <div class="small-8 columns">
              <input type="submit" value="Register" style="background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px; margin-left:130px; margin-top:20px;">
              <input type="reset" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="margin-left:320px; font-size:0.8em;">&copy; Project in IT304. All Rights Reserved.</p>
        </footer>
      </div>
    </div>
  </body>
</html>
