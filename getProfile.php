

<?php
session_start();

require 'includes/dbh.inc.php';

$Username = $_SESSION['userNM'];

$sql = "SELECT profUserName FROM profiles WHERE profUserName=?";

$stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        echo "mysqlError";
        exit();
      }

    else{
        mysqli_stmt_bind_param($stmt, "s", $Username );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $availabilityCheck = mysqli_stmt_num_rows($stmt);

          if ($availabilityCheck>0) {
              $query = "SELECT firstName, lastName,idNo, emailAddr, cellNo, city, province, role, eduLevel, regDate FROM users,profiles WHERE (users.userName = profiles.profUserName) AND profiles.profUserName ='$Username'";
              $res = mysqli_query($conn, $query) or die("Connection Failed: Cannot obtain user profile. Error: ".mysqli_error($conn));
              $checkRes = mysqli_num_rows($res);
              if ($checkRes > 0) {
                $row = mysqli_fetch_assoc($res);

                $Firstname = $row['firstName'];
                $Lastname =$row['lastName'];
                $Idnum = $row['idNo'];
                $CellNum =$row['cellNo'];
                $EmailAdd = $row['emailAddr'];
                $City = $row['city'];
                $Province = $row['province'];
                $Role = $row['role'];
                $Edustatus = $row['eduLevel'];
                $RegDate = $row['regDate'];

                $_SESSION['firstname'] = $row['firstName'];
                $_SESSION['lastname'] =$row['lastName'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['grade'] = $row['eduLevel'];
              }
              else {
                echo ("An Error occured: ".mysqli_error($conn));
              }

            mysqli_stmt_close($stmt);
            mysqli_close($stmt);
            //echo "Profile Already created";

          }

          else {
            mysqli_stmt_close($stmt);
            mysqli_close($stmt);
            header('Location: ../createprofile.php');
          }

      }
