<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Confirmation</title>
</head>

<body>
<?php

// require "dbc.php";
include 'header.php';
include 'config.php';

$username = $_GET['email'];
$code = $_GET['code'];

$query = $mysqli->query("SELECT * FROM user2016 WHERE email='$username'");
while($row = $query->fetch_assoc())
{
	$db_code = $row['confirmcode'];
}
if($code == $db_code)
{
	$mysqli->query("UPDATE user2016 SET valid=1 where email='$username'");
	$mysqli->query("UPDATE user2016 SET confirmcode=0 where email='$username'");

	
	echo "Thank You. Your email has been confimed and you may now login";
}
else
{
	echo "Username and code dont match";	
}

include 'footer.php';
?>
</body>
</html>