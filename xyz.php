<!DOCTYPE html>
<html>
<head>
	<title>xyz page</title>
</head>
<body>
<hl>Hello xyz page</hl>
<pre>
<?php

print_r($_GET);
echo "<br><br>";
$name=$_GET['name'];
echo $name."<br>";
$age=$_GET['age'];
echo $age;
echo "<br><br>";


?>	
</pre>

</body>
</html>