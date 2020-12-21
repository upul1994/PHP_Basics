<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="xyz.php?name=chamara&age=26">Click here to go xyz php page</a> 
<br><br>

<?php

$name="chamara";
$age=21;


?>


<a href="xyz.php?name=<?php echo$name ?>">Click here to go xyz page</a>
<br><br>
<a href="xyz.php?name=<?php echo$name ?>&age=<?php echo $age ?>">Click here to go xyz page</a>


</body>
</html>