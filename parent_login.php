<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="daycare database"; // Database name 
$tbl_name="parent"; // Table name 

// Connect to server and select database.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db("$db_name")or die("cannot select DB");
// Get values from form 
$email=$_POST['emailaddy'];
$social=$_POST['parent_ssn'];

$msg = '';

	if (isset($_POST['emailaddy']) && !empty($_POST['parent_ssn']))
		{
		
	   if ($_POST['email'] == '' && 
		  $_POST['parent_ssn'] == '') {
		  $_SESSION['valid'] = true;
		  $_SESSION['timeout'] = time();
		  $_SESSION['email'] = '';
		  
		  echo 'You have entered valid use name and password';
	   }else {
		  $msg = 'Wrong username or password';
	   }
	}
?>