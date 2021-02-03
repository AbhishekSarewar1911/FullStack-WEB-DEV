<?php
include('config.php');
?>
<?php
$username = ''; 
$email = ''; 
$gender = ''; 
$city = ''; 
$branch = ''; 
$year = ''; 
	if(isset($_POST['UserName'])){
		$username = $_POST['UserName'];
	}
	else{
		$username = ''; 
	}
	if (isset($_POST['Email'])) {
		$email = $_POST['Email'];
	}
	else{
		$email = ''; 
	}
	/*if (isset($_POST['Contact'])) {
        $contact = $_POST['Contact'];
    	if(! (is_numeric($contact))){
        	echo "<script>alert('contact number should have 10 digit phone nos')</script>" ;
    	}
	}
	else{
		$contact = ''; 
    }*/
    if (isset($_POST['Gender'])) {
		$gender = $_POST['Gender'];
	}
	else{
		$gender = '';  
	}


	if (isset($_POST['City'])) {
		$city = $_POST['City'];
	}
	else{
		$city = '';  
	}
	if (isset($_POST['Branch'])) {
		$branch = $_POST['Branch'];
	}
	else{
		$branch = '';   
    }
    if (isset($_POST['Year'])) {
		$year = $_POST['Year'];
	}
	else{
        $year = ''; 
    }
	/*if (isset($_POST['Interest'])) {
		$interest = $_POST['Interest'];
		$interest = implode(" , ", $interest); 
	   if (substr_count($interest,",")<1){
	    echo "<script>alert('select atleast three intrests')</script>" ;
		}	
	}
	else{
		$interest = '';  
	}*/
	if(isset($_POST['submit'])){
		// $username = $_POST['username'];
		// $email = $_POST['email'];
		// $contact = $_POST['contact'];
		// $city = $_POST['city'];
	
		 $sql1 = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
		 $sql2 = "INSERT INTO `student-details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
		mysqli_query($conn, $sql1);
        mysqli_query($conn, $sql2);
	}
	else{
		echo "Please click submit button to submit the data..";
	}
?>


<table border="2" cellpadding = "8" align="top" >
	<tr>
		<td>UserName</td>
		<td>Email</td>
		<td>Gender</td>
		<td>City</td>
		<td>Branch</td>
		<td>Year</td>
	</tr>
	<tr>
		<td><?php echo $username ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $gender?></td>
		<td><?php echo $city ?></td>
		<td><?php echo $branch ?></td>
		<td><?php echo $year ?></td>
	</tr>
</table>
<form method="post">	
<table id = "form" align = "center" margin-top:50px border = "collapse" cellspacing = " 35" style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1))">
	
	<tr><td>UserName  <td><input type="text"   placeholder="Enter Name" name = "UserName" required></td></tr>
	
    <tr><td>Email <td><input type="email" placeholder="Enter Email" name = "Email" required></td></tr>
    
   <tr><td> Gender<br>Male <input type="radio" name="Gender" value="male" checked> 
    Female<input type="radio" name="Gender" value="female" checked><br></td></tr>
	
	<!-- <tr><td>Contact <td><input  type="contact"  minlength="10" maxlength="10"  placeholder="Enter Contact" name = "Contact"required></td></tr> -->
	
	<tr><td>City 
		<td><select name = "City"required>
			<option>Select City</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Varanasi">Varanasi</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Amritsar">Amritsar</option>
			<option value="Delhi">Delhi</option>
		</select>
	</td></tr>
	
	<tr><td>Branch <td><input type="text" placeholder="Enter branch Name" name = "Branch" required=""></td></tr>
	
	<tr><td>Year <td><input type="text" placeholder="Enter year" name = "Year" required=""></td></tr>
	
	<tr><td>Submit ? <td><input type="Submit" name = "Sub"></td></tr>
</table>
</form>