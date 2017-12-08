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
$frname =$_POST['emp_fname'];
$lsname = $_POST['emp_lname'];
$ssocial = $_POST['emp_ssn'];
$date_b = $_POST["d_o_b"];
$phonen = $_POST["ph_num"];
$emailad = $_POST["emailaddy"];
$addr = $_POST["addy"];


// Attempt login query execution
$sql = "INSERT INTO employee(firstName,lastName, employee_SSN, DOB ,email_address, phone_number, address) VALUES ('$frname', '$lsname','$ssocial','$date_b' ,'$emailad','$phonen' ,'$addr')";

if(mysqli_query($link, $sql))
{
    echo "Successfully signed up.";
			header('Location: emp_login.html');
} else
{
    echo "ERROR: Not able to sign up. " . mysqli_error($link);
	
}
 
// Close connection
mysqli_close($linked);
?>