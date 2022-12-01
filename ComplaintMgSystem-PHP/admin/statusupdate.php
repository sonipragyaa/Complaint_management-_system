<?php
  // require '../core/session.php';
  require 'config.php';
  // require '../core/admin-key.php';

   $id = $_GET['id'];
   $sql = "UPDATE cmp_log SET status='true' WHERE id=$id";
   if(mysqli_query($conn, $sql)){
       echo "Record was updated successfully.";
   } 
   header("Location:users.php");




   

   ?>
