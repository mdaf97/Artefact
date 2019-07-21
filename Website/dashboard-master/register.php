<?php
	Require("pd.php"); 
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sqlStatement = "INSERT INTO `Login` (`userName`, `pass`) VALUES ('" . $user . "', '" . $pass . "');";
	if ($conn->query($sqlStatement) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sqlStatement . "<br>" . $conn->error;
	}
	$conn->close();
	//$res = mysqli_query($conn, $sqlStatement );
	//echo $sqlStatement;
?>
