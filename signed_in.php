<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "daycare db");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$cfname = $_POST["c_fname"];
$clname = $_POST["c_lname"];
$csocial = $_POST["c_ssn"];
$cdate_birth = $_POST["cd_o_b"];
	
// Close connection
mysqli_close($link);
?>