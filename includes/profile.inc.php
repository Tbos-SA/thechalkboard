<?php
session_start();

if (isset($_POST['profile-submit'])) {
  require 'dbh.inc.php';

    $Username = $_SESSION['userNM'];
    $Name =$_POST['name'];
    $Surname= $_POST['surname'];
    $IdNum = $_POST['idnum'];
    $Cellphone = $_POST['cell'];
    $Email = $_SESSION['userMail'];
    $City = $_POST['city'];
    $Province = $_POST['province'];
    $Role= $_POST['role'];
    $Edulevel = $_POST['level'];

     $sql = "SELECT profUserName FROM profiles WHERE profUserName=?";
     $stmt = mysqli_stmt_init($conn);

     if (!mysqli_stmt_prepare($stmt, $sql)) {
       header('Location: ../profile.php?error=sqlerror');
       exit();
     }

   else{
       mysqli_stmt_bind_param($stmt, "s", $Username );
       mysqli_stmt_execute($stmt);
       mysqli_stmt_store_result($stmt);
       $availabilityCheck = mysqli_stmt_num_rows($stmt);
         if ($availabilityCheck>0) {
           header('Location: ../profile.php?error=userexists');
         }

        else {

         $sql = "INSERT INTO profiles (profUserName, firstName, lastName,idNo, cellNo,emailAddr, city, province, role, eduLevel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
         $stmt = mysqli_stmt_init($conn);

           if (!mysqli_stmt_prepare($stmt, $sql)) {
             header('Location: profile.inc.php?error=sqlerror');
             exit();
           }

             else{

               $bindCheck =  mysqli_stmt_bind_param($stmt, "ssssssssss", $Username,$Name, $Surname,$IdNum, $Cellphone,$Email,$City, $Province, $Role,$Edulevel);

              if ($bindCheck==true) {
                  $executeCheck = mysqli_stmt_execute($stmt);
                if ($executeCheck==true) {
                    header('Location: ../content.php?profile=success');
                }
                else {
                  echo "Execute failed";
                }
              }

              else {
                echo "Binding failed";
              }

          }
       }
     }


     mysqli_stmt_close($stmt);
     mysqli_close($stmt);

  }

  else {
    header("Location: ../login.php?loginfirst");
    exit();
  }
 ?>
