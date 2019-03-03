<?php
    if ($_POST) {
    	$email=$_POST['email'];
		$userName=$_POST['name'];
		$rollNo=$_POST['rollNo'];
		$password=$_POST['password'];
		$rePassword=$_POST['rePassword'];
		$mobile=$_POST['mobile'];
    }
	
	// $pieces = explode("IH", $rollNo);
	include "config.php";
	
	if ($email!='' && $userName !='' && $rollNo !='' && $password!='' && $rePassword !=''  && $mobile != '') {

		if (strlen($password)>=8 && strlen($rePassword)>=8 ) {

			if (strcmp($password, $rePassword)==0) {
	
			
				$data = $mysqli->query("SELECT * FROM user2016 WHERE email='$email'");
			    if($row = $data->fetch_assoc())
			    {
			    	echo  $email.'   alredy exists';
			    }
			    else
			    {
			    	$confirmcode=rand();
					$mysqli->query("INSERT INTO user2016(email,name,roll,password,year,valid,confirmcode,mobile) VALUES('$email','$userName','2016','$password',2016,0,'$confirmcode','$mobile')");
					$message= 
					"
					confirm your email 
					click link below to verify your account
					http://www.placements.esy.es/emailconfirm.php?email=$email&code=$confirmcode

					";
					mail($email,"confirm your email from placements portal", $message);
					echo "ok";
			    }	
		    }
		    else
		    {
		    	echo "password doesn't match";
		    }
	  }
	  else{
	  	echo " minimum length of password should be 8";
	  }
	}
	else
	{
		echo "please fill all the details";
	}
	


?>