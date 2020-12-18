<?php
   $connection = mysqli_connect("localhost", "root", "", "registration");
   $query = "SELECT * FROM login;";
   if ($connection) {
      echo "";
   }else{
      die("conection failed");
   }
?>