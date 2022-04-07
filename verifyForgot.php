<!-- this process the forgot password, if email does not match any account then there's no process  -->

<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$newPassword = $_POST["Npwd"];

$flag = 'true';

$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username) {
      $mysqli->query('UPDATE users SET password ="'. $newPassword .'" WHERE id ='.$obj->id);
      header("Location: success.php");
      exit();
    }
    else {
      header("Location: error.php");
      exit();
    }

  }
}

?>
