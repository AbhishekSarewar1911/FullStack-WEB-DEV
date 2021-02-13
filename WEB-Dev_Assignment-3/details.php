<?php 
	include('config.php');
?>
<?php 
	$sql = "SELECT * FROM `users`"; 
	$result = mysqli_query($conn , $sql); 
	if($result->num_rows > 0){
?>
<html lang="en">
<head>
	<title>Database Records</title>
    <style>
   .btn { background-image: linear-gradient(to right, #009ffd,#ffffff);
   
 }
 .btn2{ background-image: linear-gradient(to left, rgba(255,0,0,0), rgba(255,0,0,1));

 }
    
    </style>
</head>
<body>	
	<table border = "1" align="center">
		<h2 align="center">DATABASE RECORDS</h2>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>	
				<th>Gender</th>
				<th>City</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while($row = $result->fetch_array()){?>
			<tr>
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>
				<td><?php echo $row[3]?></td>
				<td><?php echo $row[4]?></td>

				<td><a href="edit.php?id=<?php echo $row['id'] ?>">
                
				<input class="btn" type="button" name="Edit" value = "Edit"></a></td>
                
				<td><a href="delete.php?id=<?php echo $row['id'] ?>">
				<input class="btn2" type="button" onclick="return del()" name="Delete" value = "Delete"></a></td>
			</tr>
			<?php } ?>	
		</tbody>
	</table>
	<?php } 
?>
<script type="text/javascript">	
function del()
{
  if(confirm("ARE YOU SURE....WANT TO DELETE THIS RECORD ??... ")){
       return true ;
  }
  else{
    return false;
  }
}
</script>
</body>
</html>