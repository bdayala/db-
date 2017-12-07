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

$pasocial = $_POST["pa_ssn"];
$chsocial = $_POST["ch_ssn"];
$finame = $_POST["ch_fname"];
$laname = $_POST["ch_lname"];
$allergies = $_POST["allergy"];
$allDescr = $_POST["allergy_d"];
$medName = $_POST["meds"];


// Attempt login query execution
$sql = "INSERT INTO medical_history(parent_SSN, child_SSN,firstName,lastName, allergies,allergy_description, medicine_name) VALUES ('$pasocial','$chsocial','$finame','$laname','$allergies','$allDescr', '$medName')";

if(mysqli_query($link, $sql))
{
    echo "Successfully added medical history.";
} else{
    echo "ERROR: Not able to add to medical history. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
?>