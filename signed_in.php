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
$repeats = "SELECT * FROM `child` WHERE parent_SSN=parent_SSN";

// $str = "SELECT
    // child.parent_SSN, parent.parent_SSN, child.child_SSN, child.firstName, child.lastName, child.DOB, parent.address FROM child INNER JOIN parent ON child.parent_SSN = parent.parent_SSN"; 

/* $result = mysqli_query($str); 
$row= mysqli_fetch_array($result);
 */

	//isset determines if a variable is set and is not NULL.
	//$_GET can collect data sent in the URL
	/* if(isset($_GET['email_address']))
	{
		//store user_id from URL
		$get_email = $_GET['email_address'];
		
		//create query to select all data from table with id get_email
		$select = "SELECT child.parent_SSN, parent.parent_SSN, child_SSN, child.firstName, child.lastName, child.DOB, parent.address FROM child INNER JOIN parent ON child.parent_SSN = parent.parent_SSN WHERE parent.email_address = $get_email";


			$run = mysqli_query($link,$select);
			
		//fetch table data to an associative array
while($row=mysqli_fetch_array($run))
{
		//store all data from table & parent with email "get_email"
		$email = $row['email_address'];
		$fname = $_POST["firstName"];
		$lname = $_POST["lastName"];
		$social = $_POST["parent_SSN"];
		$date_birth = $_POST["DOB"];
		$phonenum = $_POST["phone_number"];
		$address = $_POST["address"];
}  */
			//fetch all database table rows to an associate array
			//use local varibles and array to store the table values
		/* 	while($row = mysqli_fetch_array($run))
			{
				$csocial= $row['child.child_SSN'];
				$fname = $row['child.firstName'];
				$lname = $row['child.lastName'];
				$c_dob = $row['child.DOB'];
				$email= $row['parent.email_address'];
				$psocial = $row['parent.SSN'];
				$paddy =$row['parent.address'];
			}
	} */



// Close connection
mysqli_close($link);

?>

