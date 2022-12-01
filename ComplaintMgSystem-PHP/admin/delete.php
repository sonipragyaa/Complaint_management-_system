<?php


require 'config.php';


		$id = $_GET['id'];
		mysqli_query($conn,"DELETE FROM `user` WHERE id='$id'")or die(mysqli_error());
		header("Location:users.php");

?>
