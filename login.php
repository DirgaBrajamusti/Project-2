<?php 
  session_start();
  include_once 'inc/class.user.php';
  $user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Admin Login</title>
  <meta name="description" content="Login">
  <link rel="stylesheet" media="screen" href="css/login.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="limiter">   
  <div id="particles-js">
    <div class="margin-luar-login">
        <div class="login-form">
            <span class="login-title">Admin Login</span>
            <?php
              if (isset($_POST['submit'])) { 
                extract($_POST);   
                  $login = $user->check_login($username, $password);
                  if ($login) {
                    header("location:index.php");
                  } else {
                    echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Warning!</strong> Invalid Username or Password!</div>';
                  }
              }
            ?>
            <form action="" method="post">            
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Username:</span>
                  </div>
                  <input type="text" class="form-control" name="username">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Password:</span>
                </div>
                <input type="password" class="form-control" name="password">
              </div>

            <input type="submit" value="Login" name="submit" class="btn btn-primary">
        </form>
        </div>
      </div>
  </div>
</div>
<!-- scripts -->
<script src="vendor/particlejs/particles.min.js"></script>
<script src="vendor/particlejs/app.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>