<?php 
require 'db_conn.php';
if (isset($_POST['reg'])) {
   if (!$_POST['reg_email'] OR !$_POST['reg_pass']) {
      header('Location: error.php');
   }else{
      $reg_email = mysqli_real_escape_string($connection, $_POST['reg_email']);
      $reg_pass = mysqli_real_escape_string($connection, $_POST['reg_pass']);
      // $reg_pass = password_hash($password, PASSWORD_DEFAULT);

      $select_query = "SELECT * FROM login WHERE password = '$reg_pass' AND email = '$reg_email'";
      $select_query_result = mysqli_query($connection, $select_query);
      if (mysqli_num_rows($select_query_result) > 0) {
         header('Location: error.php');
      }else{
         $query = "INSERT INTO login (email, password)
         VALUES ('$reg_email', '$reg_pass')";

         $query_result = mysqli_query($connection, $query);
         if (!$query_result) {
            die("Query failed ". mysqli_error($connection));
         }else{
            header('Location: animation img slider/index.html');
         }
      }
   }
}
?>
