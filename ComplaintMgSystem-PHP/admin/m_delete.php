<?php

require 'config.php';
		$id = $_GET['id'];
		mysqli_query($conn,"DELETE FROM `cmp_log` WHERE id='$id'")or die(mysql_error());
		header("Location:message.php");

?>
