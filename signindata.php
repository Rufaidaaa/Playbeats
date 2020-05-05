<?php

		session_start();
		$error= "";
	//header('location:signin.php');

		$con = mysqli_connect("localhost","root","","login");

		$email = $_POST['email'];
		$pass= $_POST['pass'];

			$reg = "SELECT * FROM login where email = '$email' and pass= '$pass' ";

			$result= mysqli_query($con,$reg);
			$count = mysqli_num_rows($result);
			if($count > 0)
			{
				header('location:index11.html');
			}
			else
			{
				$error = "username or password inncorrect";
				$url = "location:signin.php?error=".$error;
				header($url);
			}
			

?>