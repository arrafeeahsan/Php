<?php
 
if (isset($_POST['submit'])) {

	$username=$_POST['username'];
	$password=$_POST['password'];
	if ($username==$username and $password==$password) {
		if (isset($_POST['rm'])) {
			setcookie('username',$username,time()+60*60*7 );

		}
			session_start();
			$_SESSION['username']=$username;
			header("location: dashBoard.php");

		
	}else{
		echo "Username or Password is Invalid.<br> click here to
		<a href='login.php'> try again </a> ";

	}
}else{
	header("location: login.php");
}

  ?>