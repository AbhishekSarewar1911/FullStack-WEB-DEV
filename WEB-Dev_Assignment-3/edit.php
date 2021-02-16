<?php 
	include('config.php'); // include config file for connection
?>

<?php
	$id  =  $_GET['id'];
	$sql = "SELECT * FROM `users` WHERE `id`=$id"; 
	$result = mysqli_query($conn , $sql); 
	$row = $result->fetch_assoc(); 
	$username = $row['username']; 
	$email = $row['email'];
	$gender = $row['gender']; 
	$city = $row['city']; 
?>

<?php
if(isset($_POST['update'])){
	$username = $_POST['username']; 
	$email = $_POST['email'];
	$gender = $_POST['gender']; 
	$city = $_POST['city']; 

	$sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender',city='$city' WHERE id='$id'"; 	
	//$result1 = mysqli_query($conn , $sql);  
	if(mysqli_query($conn, $sql)){
		echo "Data updated successfully...";
		header("Location:details.php");  
	}
	else{
		echo "Data updation failed..."; 
	}
}

?>
<html>
<head>
	<title>DATABASE</title>
    <style>
   /* .frm1{ 
        background-image: linear-gradient(to right, #009ffd,#ffffff);
        margin-top: 100px;
        padding-bottom: 100px;
        padding-top: 70px;
        padding-right: 80px;
        padding-left: 80px;


    }*/
    .frm2{
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
<form  method="post" action = "edit.php?id=<?php  echo "$id"?>">	
<table class = "frm2" align = "center" border = "3" cellspacing = " 20">
<h2 align="center">EDIT PAGE</h2>

	
	<tr><td>Username <td><input type="text" placeholder="Enter Username" name = "username" value = "<?php echo $username?>" required></td></tr>


	<tr><td>Email <td><input type="email" placeholder="Enter Email" name = "email" value = "<?php echo $email ?>" required></td></tr>
	
	
	<tr><td>Gender 
		<td>
			<input type="radio" id="Male" name="gender" <?php if($gender == "Male"){echo "checked";}?> value = "Male">
			<label for="Male" >Male</label><br>
			<input type="radio" id="Female" name="gender" <?php if($gender == "Female"){echo "checked";}?> value = "Female">
			<label for="Female" >Female</label><br>
		</td>
	</td>
</tr>


	<tr><td>City 
		<td><select name = "city" required>
			<option>Select City</option>
				<option value="Dehradun" <?php if($city == "Dehradun"){echo "selected";}?>>Dehradun</option>
			<option value="Delhi"    <?php if($city == "Delhi"){echo "selected";}?>>Delhi</option>
		        <option value="Mumbai" <?php if($city=="Mumbai"){echo "selected";}?>>Mumbai</option>
			<option value="Jaipur"   <?php if($city == "Jaipur"){echo "selected";}?>>Jaipur</option>
			<option value="Kolkata" <?php if($city=="Kolkata"){echo "selected";}?>>Kolkata</option>
			<option value="Agra" <?php if($city=="Agra"){echo "selected";}?>>Agra</option>
			<option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
			<option value="Patna" <?php if($city=="Patna"){echo "selected";}?>>Patna</option>
		</select>
	</td></tr>
	

	<tr><td><input type="Submit" name = "update" value = "UPDATE"></td></tr>
</div>
</form>
</body>
</html>
