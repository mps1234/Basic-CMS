<?php
require("constants.php");
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!isset($connection))
	{
		die("Database Connection Failed: ".mysqli_error());
	}
?>