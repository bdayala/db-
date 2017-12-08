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
 

	// Check to see if this run of the script was caused by our login submit button being clicked.
	// Also check that our email address and password were passed along. If not, jump
		// down to our error message about providing both pieces of information.
		if (isset($_POST['emailaddy']) && isset($_POST['emp_ssn'])) 
		{
			$email = $_POST['emailaddy'];
			$pass = $_POST['emp_SSN'];
 
			// Connect to the database and select the user based on their provided email address.
			// Be sure to retrieve their password and any other information you want to save for the user session.
			$pdo = new Database("");
			$pdo->query("SELECT * FROM employee WHERE $email = email_address" );
			$pdo->bind('emailaddy', $email);
			$row = $pdo->single();


			// If the user record was found, compare the password on record to the one provided hashed as necessary.
			// If successful, now set up session variables for the user and store a flag to say they are authorized.
			// These values follow the user around the site and will be tested on each page.
			/* if (($row !== false) && ($pdo->rowCount() > 0)) 
			{
				if ($row['parent_SSN'] == hash('sha256', $social)) 
				{

					// is_auth is important here because we will test this to make sure they can view other pages
					// that are needing credentials.
					$_SESSION['is_auth'] = true;
					$_SESSION['email_addy'] = $row['emailaddy'];
					$_SESSION['parent_ssn'] = $row['parent_ssn'];

					// Once the sessions variables have been set, redirect them to the landing page / home page.
					
					exit;
				}
				*/
		}
		header("Location: emp_signed_in.html");
?>



