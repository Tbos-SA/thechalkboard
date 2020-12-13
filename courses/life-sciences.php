<?php
$CourseName = "Life Science";
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
      <h4 class="alert-heading"> Welcome to <?php$CourseName ?></h4>
      <p>There is no content yet </p>

      <hr>
      <p class="mb-0"> Please contact the course administrator</p>
    </div>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="name" style="padding: 15px;color: #fff;text-align: center;">
        <?php echo "Logged is as ".$_SESSION['firstname']." ".$_SESSION['lastname'];?>
        <?php echo "<br>".$_SESSION['grade']."  ".$_SESSION['role'] ;?>
        <hr>
      </div>
      <?php
       require 'coursecomponents.php';
       ?>
    </div>



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
require "../footer.php"
?>
