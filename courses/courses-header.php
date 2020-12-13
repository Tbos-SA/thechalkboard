<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="../sidenav.css">
    <title><?php echo $CourseName; ?></title>
  </head>
</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <span style="font-size:30px;cursor:pointer;position: fixed;color:#fff;" onclick="openNav()">&#9776; <?php echo $CourseName; ?></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">


        <?php
        if (!isset($_SESSION['userNM'])){
          echo '
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php#tutoring">Tutoring</a></li>
                <li><a href="index.php#mentoring">Mentoring</a></li>
                <li><a href="index.php#general">General Support</a></li>
              </ul>
            </li>
            <li><a href="index.php#about">About Us</a></li>
            <li><a href="index.php#contact">Contact Us</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          ';

        }

        else{
          echo '
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../profile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
            <li><a href="../includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>';
          }
        ?>

    </div>
  </div>
</nav>
  <br><br><br>

</html>
