<?php
	// First start a session. This should be right at the top of your login page.
	session_start();

	// Check to see if this run of the script was caused by our login submit button being clicked.
	if (isset($_POST['email_address'])) 
	{

		// Also check that our email address and password were passed along. If not, jump
		// down to our error message about providing both pieces of information.
		if (isset($_POST['emailaddy']) && isset($_POST['parent_ssn'])) 
		{
			$email = $_POST['emailaddy'];
			$pass = $_POST['parent_ssn'];

			// Connect to the database and select the user based on their provided email address.
			// Be sure to retrieve their password and any other information you want to save for the user session.
			$pdo = new Database();
			$pdo->query("SELECT * FROM parent WHERE $email = email_address" );
			$pdo->bind('email_address', $email);
			$row = $pdo->single();


			// If the user record was found, compare the password on record to the one provided hashed as necessary.
			// If successful, now set up session variables for the user and store a flag to say they are authorized.
			// These values follow the user around the site and will be tested on each page.
			if (($row !== false) && ($pdo->rowCount() > 0)) 
			{
				if ($row['parent_ssn'] == hash('sha256', $social)) 
				{

					// is_auth is important here because we will test this to make sure they can view other pages
					// that are needing credentials.
					$_SESSION['is_auth'] = true;
					$_SESSION['email_address'] = $row['email_address'];
					$_SESSION['parent_ssn'] = $row['parent_ssn'];

					// Once the sessions variables have been set, redirect them to the landing page / home page.
					
					exit;
				}
				else {
					$error = "Invalid email or password. Please try again.";
				}
			}
			else {
				$error = "Invalid email or password. Please try again.";
			}
		}
		else {
			$error = "Please enter an email and password to login.";
		}
	}
	
?>

<meta http-equiv="refresh" content="0; URL=signed_in.html" />

