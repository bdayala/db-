<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "daycare_db");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
print_r($_POST);
print("<br>"); 
$fname = $_POST["c_fname"];
$lname = $_POST["c_lname"];
$csocial = $_POST["c_ssn"];
$social = $_POST["parent_ssn"];
$date_birth = $_POST["dob"];
$address = $_POST["addy"];


// Attempt login query execution
$sql = "INSERT INTO child(parent_SSN, firstName,lastName, child_SSN,DOB, address) VALUES ('$social','$fname', '$lname','$csocial','$date_birth','$address')";

if(mysqli_query($link, $sql))
{
    echo "Successfully signed up child.";
	header("Location: child_medical.html");

	
} else{
    echo "ERROR: Not able to sign up. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>