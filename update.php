<?php require 'connection.php';    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<?php

$db ="UPDATE user SET phone='0786682071' WHERE id=8";

$result =mysqli_query($con,$db);

echo "<br><br>";

if ($result) {
	echo mysqli_affected_rows($con); # After Update we can display how many rows affect.
}else{

	echo "Query is wrong";
}

?>
</body>
</html>
<? php mysqli_close($con);   ?>


