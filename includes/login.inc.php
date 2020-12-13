

<?php

if (isset($_POST['login-submit'])) {

  require 'dbh.inc.php';

  $userName= $_POST['username'];
  $password = $_POST['password'];

  if (empty($userName) || empty($password)) {
    header("Location: ../login.php?error=emptyfields&email=".$userName);
    exit();
  }

 else {
    $sql = "SELECT * FROM users WHERE userName=? OR userEmail=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
      }

    else {
      mysqli_stmt_bind_param($stmt, "ss", $userName, $userName);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {

           $passwordCheck = password_verify($password, $row['userPswd']);

              if ($passwordCheck ==false) {
                header("Location: ../login.php?invalidpassword");
                exit();
                }

              elseif ($passwordCheck == true) {
                session_start();
                $_SESSION['userID'] = $row['userNo'];
                $_SESSION['userNM'] = $row['userName'];
                $_SESSION['userMail'] = $row['userEmail'];
                  header("Location: ../courses/content.php?login=success");
                  exit();
                }
              else {
                header("Location: ../login.php?invalidpassword");
                exit();
                }
            }
          else {
            header("Location: ../login.php?nouser");
            exit();
            }
        }
    }
}

else {
  header("Location: ../login.php?loginfirst");
  exit();
}
