<?php
if (isset($_POST['signup-submit'])){
  require 'dbh.inc.php';


$userName = $_POST['username'];
$inEmail= $_POST['email'];
$password = $_POST['password'];
$passwordReapeat = $_POST['password-repeat'];
//Check for empty fields
  if ( empty($userName) || empty($inEmail) || empty($password) || empty($passwordReapeat)) {
    header('Location: ../signup.php?error=emptyfields&username='.$userName.'&email='.$inEmail);
    exit();
  }
  else if (!filter_var($inEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
     header('Location: ../signup.php?error=invalidemailandusername');
     exit();
   }

 else if (!filter_var($inEmail, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../signup.php?error=invalid_email&username='.$userName);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
     header('Location: ../signup.php?error=invalidusername&email='.$inEmail);
     exit();
   }
else if ($password != $passwordReapeat) {

    header('Location: ../signup.php?error=passwordcheck&username='.$userName.'&email='.$inEmail);
    exit();
  }

//if there are not empty fields
 else{

    $sql = "SELECT userName FROM users WHERE userName=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header('Location: ../signup.php?error=sqlerror');
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s", $userName );
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $availabilityCheck = mysqli_stmt_num_rows($stmt);
        if ($availabilityCheck>0) {
          header('Location: ../signup.php?error=usernametaken&inEmail='.$inEmail);
          exit();
        }

        else {
        $sql = "INSERT INTO users (userName, userEmail, userPswd) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../signup.php?error=sqlerror');
            exit();
          }
          else{
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $userName,$inEmail, $hashedPwd);
            mysqli_stmt_execute($stmt);
              header('Location: ../login.php?signup=success');
          }
      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($stmt);
}

else {
  header("Location: ../signup.php");
  exit();
}
