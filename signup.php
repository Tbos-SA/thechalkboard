<?php
require "header.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
  <!------ Include the above in your HEAD tag---------->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
  <main>
    <div class="form-container">
      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">

          <div class="myform form ">
            <div class="logo mb-3">
              <div class="col-sm-12 text-center">
                <h1>Signup</h1>
              </div>
            </div>
            <form action="includes/signup.inc.php" method="POST" name="registration">

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label for="repeat">Repeat Password</label>
                <input type="password" name="password-repeat" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Repeat Password">
              </div>

              <div class="form-group">
                <p class="text-center" style="color:black;">By signing up you accept our <a href="#">Terms Of Use</a></p>
              </div>

              <div class="col-md-12 text-center mb-3">
                <button type="submit" name="signup-submit" class=" btn btn-block mybtn btn-primary tx-tfm">Sign Up</button>
              </div>
              <br><br>

              <div class="col-md-12 ">
                <div class="form-group">
                  <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                </div>
              </div>

            </form>
            <br>
          </div>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>
  </main>

</body>


</html>
