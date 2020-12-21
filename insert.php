<?php  include 'connection.php';  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>




<form action="Insert.php" method="POST">

First Name:<input type="text" name="fname">
<br><br>
Last Name:<input type="text" name="lname">
<br><br>
Phone:<input type="text" name="phone">
<br><br>
Password:<input type="Password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<br><br>
</form>



<?php



if (isset($_POST['submit'])) {

	$firstName=$_POST['fname'];
	$lastName=$_POST['lname'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];

	$encriptPassword =sha1($password); # encript the password

	$db ="INSERT INTO user(first_name,last_name,phone,password,status) VALUES('$firstName','$lastName',
	'$phone','$encriptPassword',1)"; # In this section we have to code this full query

	echo "$firstName , $lastName , $phone , $encriptPassword";
	echo "<br>";

	$result =mysqli_query($con,$db); # save data in database table

    if ($result) {
    	echo "Record is added.";
    }else{
    	echo "There is no record to add.";
    }



}




?>




</body>

</html>

<?php  mysqli_close($con); # close the connection  ?> 