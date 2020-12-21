<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
<?php
$_SESSION['name']="chamara";
$_SESSION['age']=26;

//session_unset(); # remove session

//session_destroy(); # remove the entire session 

//$_SESSION['name']="chamara";
//$_SESSION['age']=26;


?>


</body>
</html>