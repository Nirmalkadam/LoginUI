<?php

$server = "localhost";
$username ="root";
$password ="";
$database ="admin";

?>

<?php
$con = mysqli_connect("$server","$username","$password","$database");
if (!$con){
  echo"connection failed";
}
