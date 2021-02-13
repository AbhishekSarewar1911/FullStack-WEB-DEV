<?php
include('config.php');
?>
<?php 
	$flag = true; 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email']; 
		$gender = $_POST['gender'];
		$city = $_POST['city'];

		if($city == "Select City")
		{
			echo "Enter Valid City"; 
			$flag = false; 
		}
		else
			$city = $_POST['city'];
		
	 	if($flag == true){
			$sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
			$a = mysqli_query($conn , $sql);
		}
	}	

?>
<html lang="en">
<head>
	<title>Login Page</title>
    <style>
    .frm{
        background-image: linear-gradient(to right, #009ffd,#ffffff);
        margin-top: 100px;
        padding-bottom: 100px;
        padding-top: 70px;
        padding-right: 80px;
        padding-left: 80px;
        
    }
    
    </style>
</head>
<body>
<form method="post">	
<table class = "frm" align = "center" border = "3" cellspacing = " 20">
	<h2 align="center"> USER LOGIN FORM </h2>
	
	<tr><td>Username <td><input type="text" placeholder="Enter Username" name = "username" required></td></tr>

	
	<tr><td>Email <td><input type="email" placeholder="Enter Email" name = "email" required></td></tr>
	
	
	<tr><td>Gender 
		<td>
			<input type="radio" id="Male" name="gender" value = "Male" required>
			<label for="Male">Male</label><br>
			<input type="radio" id="Female" name="gender"  value = "Female">
			<label for="Female">Female</label><br>
		</td>
	</td>
</tr>

	
	<tr><td>City 
		<td><select name = "city" required>
			<option>Select City</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Delhi" >Delhi</option>
			<option value="Jaipur">Jaipur</option>
		</select>
	</td></tr>
	

	<tr><td><input type="Submit" name = "submit" >
</div>
</form>
</body>
</html>