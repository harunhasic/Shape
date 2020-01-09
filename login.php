<?php
require_once('connection.php');
include('server.php');
?>
<!doctype html>
<html>
<head>
  <title>Shape registration</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="registrationCSS.css">
  <meta name="theme-color" content="#fafafa">
</head>
<style>
  a:link {
    color: white;
  }

  /* visited link */
  a:visited {
    color: white;

  }
  a{
    font-size:1.4em;
  }

  /* mouse over link */
  a:hover {
    color: rgba(203,20,11,0.8);
    text-decoration:none;
  }

  /* selected link */
  a:active {
    color: white;
  }
</style>
<body>
<div>
  <?php

  ?>

</div>
<div>
  <form action="login.php" method="post">
    <div class="container">
      <div class="space"><a href="index.php">Back</a><h1 class="heading">Welcome to Shape, please log in.</h1></div>

      <div class="row">
        <div class="col-md-4 offset-4">
          <h1>Log into your Shape account</h1>
          <p>Fill up the form in order to log in for Shape.</p>
          <hr class="mb-3">

          <label for="email"><b>Email adress</b></label>
          <input class="form-control" id="email" type="email" name="email" required>
          <label for="password"><b>Password</b></label>
          <input class="form-control" id="password" type="password" name="password" required>
          <hr class="mb-3">
          <input class="btn btn-danger" type="submit" name="login_user" value="Log In">
        </div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript" src="js/vendor/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">

</script>
</body>
</html>
