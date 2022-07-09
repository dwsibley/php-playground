<?php
  session_start();
  #echo session_status();
  #echo var_dump($_SESSION)
  $invalid_login = False;

  if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION['username'] = $_POST['username'];
        header('Location: /simple-login-flow/index.php');
    } else {
      $invalid_login = True;
    }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width-device-width, initial-scale=1.0" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #17a2b8;
      height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
      margin-top: 120px;
      max-width: 600px;
      height: 320px;
      border: 1px solid #9C9C9C;
      background-color: #EAEAEA;
    }

    #login .container #login-row #login-column #login-box #login-form {
      padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
  </style>
</head>

<body>
  <div id="login">
    <!--<h3 class="text-center text-white pt-5">Login form</h3>-->
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <!--<form id="login-form" class="form" action="process-login.php" method="post">-->
            <form id="login-form" autocomplete="off" class="form" action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post">
              <h3 class="text-center text-info">Login</h3>
              <div class="form-group">
                <label for="username" class="text-info">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Password:</label><br>
                <!----can add show button to change-->
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <!-----------taking away remember me and register and keeping it simple for now--->
              <div class="form-group">
              <!--
              <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
              -->
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
              </div>
              <div class="text-info">
                <?php 
                  if ($invalid_login) {
                    echo "<center> Invalid Login</center><br>";
                    #echo "Invalid login";
                  } 
                ?>
              </div>
              <!---
              <div id="register-link" class="text-right">
                <a href="#" class="text-info">Register here</a>
              </div>
              -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>