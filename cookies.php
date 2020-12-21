

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

<?php



if (isset($_COOKIE['item'])){

print_r($_COOKIE);
echo "<br><br>";
$value =$_COOKIE['item'];
echo "$value";  # print the existing cookie

}else{

setcookie('item','bag',time()+60*60); # If not exist cookie, set the cookie

	
}
?>



<?php

# setcookie('item',NULL,-time()+60*60); # delete the cookie
?>





</body>
</html>