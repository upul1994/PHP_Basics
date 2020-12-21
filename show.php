<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
</head>
<body>
<br><br>	
<?php
$db ="SELECT * FROM user";

$result =mysqli_query($con,$db);

if ($result) {
	
echo mysqli_num_rows($result);  # count the databse table rows
	echo "<br>";
	$r =mysqli_fetch_assoc($result); # retrieve the database table data
	echo "<pre>";
    print_r($r);
    echo "</pre>";
    echo "<br><br><br>";

/* retrieve the all data as array(because we retrieve first row in above case so, in this case retrieve all data without  first row from the database table)   */

while($r=mysqli_fetch_assoc($result)){
	echo "<pre>";
	//print_r($r); #display data as assosiative array
	echo "</pre>";
	echo "<br><br>";
	$fname=$r['first_name'];
	echo "<br>";
	echo $fname;
	$lname=$r['last_name'];
	echo "<br>";
	echo $lname;
	$phone=$r['phone'];
	echo "<br>";
	echo $phone;
	







}
	


}else{

   echo "There is no data found in database table ";

}



?>


</body>
</html>
<?php mysqli_close($con);  ?>