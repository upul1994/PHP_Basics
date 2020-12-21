<?php require 'connection.php';     ?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
<?php

$db ="DELETE FROM user WHERE id=8";

$result =mysqli_query($con,$db);

echo "<br><br>";

if ($result) {
	echo mysqli_affected_rows($con); # disply count of deleted rows 
}else{

	echo "Query is wrong";
}


?>



</body>
</html>
<?php mysqli_close($con);      ?>