<?php
  session_start();
  #echo session_status();
  #echo var_dump($_SESSION)

  if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
  } else {
      #echo "sending you to login page";
      header('Location: /simple-login-flow/login.php');  # QUESTION: what are best practices on sending browser to another page?  seen multiple ways
  }
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width-device-width, initial-scale=1.0" />
  <!------ Include the above in your HEAD tag ---------->
</head>

<body>
  <div>
    <h3>This the page 1</h3>
    <a href="index.php"> Main Page</a><br>
    <a href="site-page2.php"> Page 2 </a><br>
    <br>
  </div>
  <div>
    <form action="/simple-login-flow/logout.php">
      <input type="submit" value="Logout" />
    </form>
    <!-- another way <a href="logout.php">Logout</a> -->
  </div>
</body>

</html>
