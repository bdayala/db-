
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "daycare_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
print_r($_POST);
print("<br>"); 
$fname = $_POST["parent_fname"];
$lname = $_POST["parent_lname"];
$social = $_POST["parent_ssn"];
$date_birth = $_POST["d_o_b"];
$phonenum = $_POST["ph_num"];
$emailaddy = $_POST["emailaddy"];
$address = $_POST["addy"];


// Attempt insert query execution
$sql = "INSERT INTO parent (firstName,lastName, parent_SSN,DOB,email_address, phone_number, address) VALUES ('$fname', '$lname','$social','$date_birth' ,'$phonenum' ,'$emailaddy','$address')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>