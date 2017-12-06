<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "daycare database");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
print_r($_POST);
print("<br>"); 
$fname = $_POST["parent_fname"];
$lname = $_POST["parent_lname"];
$social = $_POST["parent_ssn"];
$date_birth = $_POST["d_o_b"];
$emailaddy = $_POST["emailaddy"];
$phonenum = $_POST["ph_num"];
$address = $_POST["addy"];


// Attempt login query execution


if(mysqli_query($link, $sql))
{
    echo "Successfully signed up.";
} else{
    echo "ERROR: Not able to sign up. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>