<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "usbw";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword,$dBName);

if(!$conn){
  die("Connection failed".mysqli_connect_error());
}

/*<?php

$servername = "sql206.epizy.com";
$dBUsername = "epiz_25559007";
$dBPassword = "oAPROHSWJocyao";
$dBName = "epiz_25559007_loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword,$dBName);

if(!$conn){
  die("Connection failed".mysqli_connect_error());
}
*/
