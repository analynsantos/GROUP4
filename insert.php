<!-- this is the process for register to insert in user table and it includes captcha verification -->

<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$captcha = $_POST["data"];
$userInput = $_POST["input"];

if($captcha == $userInput) {
	if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password, profile) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd', 'profile.jpg')")){
		echo 'Data inserted';
		echo '<br/>';
	}
	
	header ("location:login.php");
}
else {
	redirect();
}

function redirect() {
  echo '<script>alert("Captcha is require.")</script>';
  header("Refresh: .5; url=register.php");
}

?>
