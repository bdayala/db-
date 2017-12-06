<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$linked = mysqli_connect("localhost", "root", "", "daycare database");
 
// Check connection
if($linked === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
print_r($_POST);
print("<br>"); 
$firname =isset( $_POST['emp_fname']);
$lsname = isset($_POST['emp_lname']);
$ssocial = isset($_POST['emp_ssn']);
$date_b = $_POST["d_o_b"];
$emailad = $_POST["emailaddy"];
$phonen = $_POST["ph_num"];
$addr = $_POST["addy"];


// Attempt login query execution
$sql = "INSERT INTO employee(firstName,lastName, employee_SSN, DOB ,email_address, phone_number, address) VALUES ('$firname', '$lsname','$ssocial','$date_b' ,'$emailad','$phonen' ,'$addr')";

if(mysqli_query($linked, $sql))
{
    echo "Successfully signed up.";
} else{
    echo "ERROR: Not able to sign up. " . mysqli_error($linked);
}
 
// Close connection
mysqli_close($linked);
?>