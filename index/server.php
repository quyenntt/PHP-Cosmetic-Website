<?php 
	session_start();
	// variable declaration
	// connect to database
	$db = mysqli_connect("localhost","root","","sell_cosmetics1") or die("can't connect database");
  	mysqli_set_charset($db,"utf8");

?>