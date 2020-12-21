<!DOCTYPE html>
<html>
<head>
	<title> Post </title>
</head>
<body>


<form action="post.php" method="POST">
Name:<input type="text" name="name">
<br><br>
Age :<input type="text" name="age">
<br><br>
<input type="submit" name="submit" value="Submit">

</form>


<pre>

<?php

print_r($_POST);

?>

</pre>

<br><br>

<?php

if (isset($_POST['submit'])) {

$name =$_POST['name'];
echo "$name <br>";
$age =$_POST['age'];
echo "$age";

}else{

echo "Submit button is not enter yet";

}
?>





</body>
</html>