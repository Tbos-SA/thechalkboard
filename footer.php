
<head>
  <link rel="stylesheet" href="style.css">
</head>

<footer>
  <?php
  if (isset($_SESSION['userNM'])){
    echo "Logged In";
  }
  else{
      echo "Logged out";
  }
  ?> </br>
  Copyright &copy;
  <script>
  document.write(new Date().getFullYear());
  </script> | The Chalkboard E-Learning Platform | All Rights Reserved </br> <em>Website created by Thabang Moliane </em>

</footer>
