<?php

$host ="localhost";
$username="root";
$password ="";
$db ="new";

$con =mysqli_connect($host,$username,$password,$db);

/*if($con){

echo "Connection Successfull"; 

}else{

	echo "Connection failed"; 
} */


# Another method

/*if (mysqli_connect_errno()) {
	echo "connection failed";
}else{

	echo "connection successful";
}*/



# In this section we can display the error 

if(mysqli_connect_errno()){

die("connection failed"." => ".mysqli_connect_error());

}else{

	echo "connection successfull";
}



?>