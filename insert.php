<?php


require('connection.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($con, $name);

	$phoneno = stripslashes($_REQUEST['phoneno']);
	$phoneno = mysqli_real_escape_string($con, $phoneno);

	$address = stripslashes($_REQUEST['address']);
	$address = mysqli_real_escape_string($con, $address);

	$username = stripslashes($_REQUEST['username']);    // removes backslashes
	$username = mysqli_real_escape_string($con, $username); //escapes special characters in a string

	$email    = stripslashes($_REQUEST['email']);
	$email    = mysqli_real_escape_string($con, $email);

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);

	$register_datetime = date("Y-m-d H:i:s");
	$query    = "INSERT into `users` (name, phoneno, address, username, password, email, register_datetime)
				 VALUES ('$name', '$phoneno', '$address', '$username', '" . md5($password) . "', '$email', '$register_datetime')";
	$result   = mysqli_query($con, $query);
	if ($result) {
		header("Location: login.php");
	} else {
		header("Location: register.php");
	}
}
	

	/* $connection = mysqli_connect("localhost", "root", "", "fooddelivery"); // Establishing Connection with Server
	if(isset($_POST['submit']))
	{ 
		$name = $_POST['fullname'];
		$email = $_POST['email'];
		$phoneno = $_POST['phone'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($name !=''||$email !=''){
			//Insert Query of SQL
			$query = "insert into users(name, phoneno, address, username, email, password) values ('$name', '$phoneno', '$address', '$username', '$email', '$password')";
			if(mysqli_query($connection, $query)){
				header('Location: login.php');
				exit;
			}
			else
			echo "<br/><br/><span>Data Not Inserted successfully...!!</span>";
		}
		else{
			echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
		}
	}
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	}
	mysqli_close($connection); // Closing Connection with Server */
?>