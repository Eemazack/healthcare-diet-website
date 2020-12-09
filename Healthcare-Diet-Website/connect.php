<!DOCTYPE html>
<html>
<head>
		<title>Health, Nutrition and Diet Guide System</title>
        <link rel="icon" href="logo7.JPG">
<style type = "text/css">
			body {

				background-image:url(love.jfif);
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-position: center;
				background-size: cover;
 
				}
			login-table{
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				text-align: center;
				}
			new{
				font-size: 20pt;
				font-type:Lucidatypewriter, monospace;
				font-weight:bold;
			   }
			a { 
				text-decoration: none; }
				a:hover { text-decoration: underline; 
			}
			

			

		</style>
</head>

<body>

<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO signup (username, password, gender, email)
values ('$username','$password','$gender','$email')";
if ($conn->query($sql)){
echo "<login-table><img src=tick.png width =160 height=160><br><br><new>Successfully Signed Up</new>
		<h3> Click here to continue
			
			<h1><button><a href=login.html>Login Here </a></button> </h1> 
		</h3>
		</login-table>";
		}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
