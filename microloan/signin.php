<?php
include_once "classes/Employee.php";
include_once "libs/Session.php";
Session::checkLogin();
$emp = new Employee();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>

  <body>
      <?php 
        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
          $inserted = $emp->employeeLogin($_POST);
        } 
      ?>
    <form class="form-signin" action="" method="POST">
      <div class="text-center mb-4">
        <img class="mb-2" src="images/brac.jpg" alt="" width="220" height="72">

      </div>
      <div class="text-center mb-4">
        <?php if (isset($inserted)) {
          echo $inserted;
        }?>
      </div>
      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">
      <p class="mt-3 text-uppercase font-weight-bold text-center"><a href="signup.php">Register</a> a new account.</p>
      <p class="mt-5 mb-3 text-muted text-center">Developed by &copy; Md Abul Kalam - 2018 </p>
    </form>
  </body>
</html>
