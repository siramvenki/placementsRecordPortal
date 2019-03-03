<?php
    if ($_POST) {
    	$email=$_POST['email'];
		$password=$_POST['password'];
    }
	
	// $pieces = explode("IH", $rollNo);
	include "config.php";
	
	if ($email!=''  && $password!='') {

				$data = $mysqli->query("SELECT * FROM user2016 WHERE email='$email' and password='$password'");
			    if($row = $data->fetch_assoc())
			    {
			    	session_start();
			    	$_SESSION['user']= $email  ;
			    	
					echo "ok";
			    }
			    else
			    {
			    	echo " email or password  not match";
					// mail($email,"confirm your email from placements portal", $message);
			    }	
		   
	}
	else
	{
		echo "please fill all the details";
	}
	


?>