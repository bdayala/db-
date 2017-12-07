<!DOCTYPE html>
<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "daycare db");
 
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
$sql = "INSERT INTO parent (firstName,lastName, parent_SSN,DOB,email_address, phone_number, address) VALUES ('$fname', '$lname','$social','$date_birth' ,'$emailaddy','$phonenum' ,'$address')";

if(mysqli_query($link, $sql))
{
    echo "Successfully signed up.";
} else{
    echo "ERROR: Not able to sign up. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>



<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Parent Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
	<div class="container">
		<div class="starter-template">
		<div class= "jumbotron">
		<title>Parent Sign Up</title> 
			<p>Please fill in your information to successfully sign up.</p>
			
		<form method="post">
		<div class="form-group"> 
			<label>First Name: <sup>*</sup></label>
				<input type="text" name="parent_fname" class="form-control">
				<span class="help-block"> </span>
         </div>    
	
		<div class="form-group ">
			<label>Last Name:<sup>*</sup></label>
			<input type="text" name="parent_lname" class="form-control">
			<span class="help-block"> </span>
		</div>			
			
		<div class="form-group ">
			<label> SSN:<sup>*</sup></label>
			<input type="text" name="parent_ssn" class="form-control">
			<span class="help-block"> </span>
		</div>			
			
		<div class="form-group">
			<label> DOB:<sup>*</sup></label>
			<input type="text" name="d_o_b" class="form-control">
			<span class="help-block"> </span>
		</div>			
			
		<div class="form-group">
			<label>Phone Number: <sup>*</sup></label>
			<input type="text" name="ph_num" class="form-control">
			<span class="help-block"> </span>
		</div>	
			
		<div class="form-group">
			<label>Email: <sup>*</sup></label>
			<input type="text" name="emailaddy" class="form-control">
			<span class="help-block"> </span>
		</div>
	
		<div class="form-group ">
			<label>Address:<sup>*</sup></label>
			<input type="text" name="addy" class="form-control">
			<span class="help-block"> </span>
		</div>

			<input type="submit" class="btn btn-primary" value="Submit">
			
		</form>

	</div>
</div>
</body>
</html>

