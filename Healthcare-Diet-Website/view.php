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
				top: 40%;
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
			
			.main-nav
					{
						float:centre;
						margin-left : 170px;
						margin-top: 30px;
						margin-bottom: 20px;
					}
			.introduction
					{
						position: fixed;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
						text-align: center;

					}
			.btn-one
					{
						border: 1px solid white;
						background-color: lightgreen;
						color: black;
						padding: 10px 30px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 20px;
						margin-top: 10px;
						margin-bottom: 20px;
						margin-left: 30px;
					}
			.btn-one:hover
					{
						background-color: #F75D59;
					}

		</style>
</head>

<body>

<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

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
//$sql = "INSERT INTO signup (username, password)
//values ('$username','$password')";

$strSQL = mysqli_query($conn,"select username from signup where username='$username' and password='$password'");
        $Results = mysqli_fetch_array($strSQL);
        if(($Results)>=1)
        {
            echo " 
			<login-table><h1>Hello $username!!<h1></login-table>	
			<center><img src=w.gif /></center>
			<h1><button><a href=lhome.html> Click Here </a></button> </h1> 
		</h3>
		</login-table>";
        }
        else
        {
            echo "<login-table>Invalid username or password!!<br><br>
				  Click <a href=login.html> Here </a> to Login Again.
				  </login-table>";
        }        
}

?>


