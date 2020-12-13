<?php
$CourseName = "Courses";
require "courses-header.php";

 ?>

<!DOCTYPE html>
<html lang="en">



<?php
  if (isset($_SESSION['userNM'])){
  require '../getProfile.php';
  ?>

<body class="content">
  <main class="main-content">
    <div class="alert alert-success alert-dismissible" role="alert">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <h4 class="alert-heading">Welcome! </h4>
      <p>You have successfully logged in </p>

      <hr>
      <p class="mb-0">You are not enrolled for any courses yet...<br> Please contact the course administrator</p>
    </div>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="name" style="padding: 15px;color: #fff;text-align: center;">
        <?php echo "Logged is as ".$_SESSION['firstname']." ".$_SESSION['lastname'];?>
        <?php echo "<br>".$_SESSION['grade']."  ".$_SESSION['role'] ;?>
        <hr>
      </div>
      <a href="accounting.php">Accounting</a>
      <a href="agricultural-sciences.php">Agricultural Sciences</a>
      <a href="life-sciences.php">Life Sciences</a>
      <a href="business-studies.php">Business Studies</a>
      <a href="economics.php">Economics</a>
      <a href="geography.php">Geography</a>
      <a href="mathematical-literacy.php">Mathematical Literacy</a>
      <a href="mathematics.php">Mathematics</a>
      <a href="physical-sciences.php">Physical Sciences</a>
    </div>
 <?php require 'displaySubjects.php'; ?>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>

  </main>


</body>

<?php   }


 else {
  header("Location: ../login.php?loginfirst");
  exit();
} ?>

</html>

<?php
require "footer.php"
?>
