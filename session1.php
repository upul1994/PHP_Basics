<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session1</title>
</head>
<body>
<pre>

<?php

print_r($_SESSION);
echo "<br><br>";
$name=$_SESSION['name'];
$age=$_SESSION['age'];

echo "$name $age";

?>	

</pre>

</body>
</html>