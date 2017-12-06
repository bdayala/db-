<?php

// Grab User submitted information
$emailaddy = $_POST["emailaddy"];
$social = $_POST["parent_ssn"];

// Connect to the database
$con = mysqli_connect("localhost", "root",'');
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("daycare database");

$result = mysqli_query("SELECT * FROM parent WHERE email_address = $email");

$row = mysqli_fetch_array($result);

if($row["email_address"]==$email && $row["parent_SSN"]==$social)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>



