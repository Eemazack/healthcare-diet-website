<html>
	<head>
		<title>BMI Calculator</title>
        <link rel="icon" href="bicon.png">
		<style type = "text/css">
			body {
					background-image: url('bbg.jpg');
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-position: center;
					background-size: cover;
				}
			i	{
					display: block;
					margin-left: auto;
					margin-right: auto;
					width: 50%;
				}
			h1 {
					color: white;
					margin-left: auto;
					margin-right: auto;					
					font-family: georgia;
					font-size: 200%;
				}
			em	{ 
					font-weight: bold;
					font-size: 800%;
				}
			p	{ 
					font-size: 16pt;
					font-family: georgia; 
				}
			h2  { 
					color: white;
					margin-left: auto;
					margin-right: auto;					
					font-family: georgia;
					font-size: 140%;
					color: white; 
				}
       </style>

        <script type="text/javascript">
        function computeBMI() {
                // user inputs
                var height = Number(document.getElementById("height").value);
                var weight = Number(document.getElementById("weight").value);
              
                //Perform calculation
                var BMI = Math.round(weight / Math.pow(height, 2) * 10000);
        
                //Display result of calculation
                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;

            if (BMI<18.5)
                document.getElementById("comment").innerHTML = "Underweight";
            if (BMI>=18.5 && BMI<25)
                document.getElementById("comment").innerHTML = "Normal";
            if (BMI>=25 && BMI<30)
                document.getElementById("comment").innerHTML = "Overweight";
            if (BMI>=30)
                document.getElementById("comment").innerHTML = "Obese";
        }
        </script>
	</head>
	
	<body>
		<i><center><img src="bfx.png" width="250" height="200" alt=“BMI_PAGE”></center></i>
                <i><h1><center>Body Mass Index Calculator</center></h1></i> &nbsp;
                <i><center><p>Enter your height, in centimeters: <input type="text" class="textbox"id="height"/> cm</</p><center></i>
                <i><center><p>Enter your weight, in kilograms: <input type="text" class="textbox" id="weight"/> kg </p><center></i>
                <i><em><input type="submit" class="calc-button" value="Calculate" onclick="computeBMI();"></em></i>
                <i><p><h2>Your BMI is: <span id="output"> </span></h2></p></i>
				<i><center><img src="bscale.jpg" width="400" height="150" alt=“BMI_SCALE”></center></i>
                <i><h2>This means you are: <span id="comment"></span></h2></i>
       
		</body>
</html>



<? php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'height');
$gender = filter_input(INPUT_POST, 'weight');
$email = filter_input(INPUT_POST, 'bmi');

if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "calculation";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $calculation);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO bmi (username, password,gender,email)
values ('$username','$height','$weight','$bmi')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
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
?>