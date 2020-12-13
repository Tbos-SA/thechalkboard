<?php
require "header.php";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Log In</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">


<body>


  <div class="form-container">
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">

        <div class="myform form ">
          <div class="logo mb-3">
            <div class="col-md-12 text-center">
              <h1>Login</h1>
            </div>
          </div>
          <form action="includes/login.inc.php" method="POST" name="login">
            <div class="form-group">
              <label for="exampleInputEmail1">Username </label>
              <input type="text" name="username" value="<?php $_GET['$userName'] ?>" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username / E-mail">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
            </div>

            <div class="col-md-12 text-center ">
              <button type="submit" name="login-submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
            </div>

            <br><br><br>
            <div class="form-group">
              <p class="text-center" style="color:black;">Don't have account? <a href="signup.php" id="signup">Sign up here</a></p>
            </div>
          </form>

        </div>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  </div>


</body>

</html>
