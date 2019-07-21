<?php
$servername = "mi-linux.wlv.ac.uk";
$username = "1421617";
$password = "123abc";
$dbname = "db1421617";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* $ID = $_POST['user']; $Password = $_POST['pass']; */

/*
"".$row["userName"]."";
"".$row["pass"]."";
*/

$query = "SELECT * FROM Login WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'"; 
$result = $conn->query($query);
			
if($result->num_rows > 0) {
	echo"";
	while($row = $result->fetch_assoc())
	{
		
	}
	echo ';
} else echo ;

$conn->close();
?>