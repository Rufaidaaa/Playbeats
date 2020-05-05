<?php

		session_start();
		header('location:signup.php');


			$con = mysqli_connect("localhost","root","","login");

		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

			$reg = "INSERT INTO `login`(`name`,`email`,`phone`,`pass`) VALUES ('$name','$email','$phone','$pass')";

			$num = mysqli_query($con,$reg);
			if($num == 1)
			{
				header('location:signin.php');
			}

?>