<html>
<head>View Medical History </head>
<br>
<br>
<body>
<?php
include 'config.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link=mysqli_connect("$host","$username","$password") or die("Server Error");
 
 if(!$link)
{
   mysqli_close($link);
}
 
mysqli_select_db($link, $database) or die ("database error");
$select = "SELECT (*) FROM (medical_history)";
$mydata = mysqli_query($link, $select);

echo "<table border =1>
<tr> 
<th>parent_SSN</th>
<th>child_SSN</th>
<th>firstName</th>	
<th>lastName</th>
<th>allergies</th>
<th>allergy_description</th>
<th>medicine_name</th>
<th>time</th>
<th>date</th>
</tr>";
while($record== mysql_fetch_array($mydata))
{
	echo "<tr>";
	echo "<td>" . $record['parent_SSN'] . "</td>";
	echo "<td>" . $record['child_SSN'] . "</td>";
	echo "<td>" . $record['firstName'] . "</td>";
	echo "<td>" . $record['lastName'] . "</td>";
	echo "<td>" . $record['allergies'] . "</td>";
	echo "<td>" . $record['allergy_description'] . "</td>";
	echo "<td>" . $record['medicine_name'] . "</td>";
	echo "<td>" . $record['time'] . "</td>";
	echo "<td>" . $record['date'] . "</td>";
	echo "</tr>";
}
echo "</table>";
		
/* if(mysqli_query($link, $sql))
{
    echo "Successfully added medical history.";
} else{
    echo "ERROR: Not able to add to medical history. " . mysqli_error($link);
} */


// Close connection

    mysqli_close($link);

?>

</body>
</html>
