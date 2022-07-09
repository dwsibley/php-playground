<?php
  session_start();
  #echo session_status();
  #echo var_dump($_SESSION)

  if (isset($_SESSION["username"])) {
    unset($_SESSION["username"]);
    session_destroy();
  } 

  echo 'You are logged out.  Click <a href="index.php"> here </a> to return.';
?>