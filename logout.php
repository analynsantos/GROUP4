<!-- this just unset any session that is present -->

<?php

  session_start();
  session_unset();
  session_destroy();
  header("location:index.php");
  exit();

?>
