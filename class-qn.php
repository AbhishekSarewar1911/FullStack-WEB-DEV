
<?php
$name = ''; 
$email = ''; 
$contact = ''; 
$city = ''; 
$course = ''; 
$interest = ''; 
	if(isset($_POST['Name'])){
		$name = $_POST['Name'];
	}
	else{
		$name = ''; 
	}
	if (isset($_POST['Email'])) {
		$email = $_POST['Email'];
	}
	else{
		$email = ''; 
	}
	if (isset($_POST['Contact'])) {
        $contact = $_POST['Contact'];
    	if(! (is_numeric($contact))){
        	echo "<script>alert('contact number should have 10 digit phone nos')</script>" ;
    	}
	}
	else{
		$contact = ''; 
	}
	if (isset($_POST['City'])) {
		$city = $_POST['City'];
	}
	else{
		$city = '';  
	}
	if (isset($_POST['Course'])) {
		$course = $_POST['Course'];
	}
	else{
		$course = '';  
		 
	}
	if (isset($_POST['Interest'])) {
		$interest = $_POST['Interest'];
		$interest = implode(" , ", $interest); 
	   if (substr_count($interest,",")<3){
	    echo "<script>alert('select atleast three intrests')</script>" ;
		}	
	}
	else{
		$interest = '';  
	}
?>
<table border="1" cellpadding = "10" align="bottom">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Contact</td>
		<td>City</td>
		<td>Course</td>
		<td>Interest</td>
	</tr>
	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $contact ?></td>
		<td><?php echo $city ?></td>
		<td><?php echo $course ?></td>
		<td><?php echo $interest ?></td>
	</tr>
</table>
<form method="post">	
<table id = "form" align = "center" cellspacing = " 20">
	
	<tr><td>Name <td><input type="text" placeholder="Enter Name" name = "Name" required></td></tr>
	
	<tr><td>Email <td><input type="email" placeholder="Enter Email" name = "Email" required></td></tr>
	
	<tr><td>Contact <td><input  type="contact"  minlength="10" maxlength="10"  placeholder="Enter Contact" name = "Contact"required></td></tr>
	
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
	
	<tr><td>Course <td><input type="text" placeholder="Enter Course Name" name = "Course" required=""></td></tr>
	
	<tr><td>Interests
	<td>
	Programming <input type="checkbox" name="Interest[]" value ="Programming">
		Reading <input type="checkbox" name="Interest[]" value = "Reading">
		Singing <input type="checkbox" name="Interest[]" value = "Singing">
		Sports <input type="checkbox" name="Interest[]" value = "Sports">
	   Painting <input type="checkbox" name="Interest[]" value = "Painting">
	</td></tr>
	
	<tr><td>Submit ? <td><input type="Submit" name = "Sub"></td></tr>
</table>
</form>
