 <html> 
<head>
        <title>SUM OF TWO NUMBERS</title>

        <style>

            body{
            
                border-style: outset;
                margin-bottom: 350px;
                margin-top: 200px;
                margin-left: 500px;
                margin-right:500px;
                padding-top: 50px; 
                /* padding-left: 100px; */
                align: center; 
            }

        
        </style>
    </head> 
<body>
<h2 align="center">  ADDITION </h2>  
<form method="post" action="sum.php" style="background-image: linear-gradient(to left, rgba(255,0,0,0), rgba(255,0,0,1))" > 
<table align="center">
<tr>

    <td> Enter First Number:   
<input type="textbox" name="number1" placeholder="Enter first number" required /><br><br> 
    </td>

</tr> 
<tr>
     <td> Enter Second Number:  
<input type="textbox" name="number2"  placeholder="Enter 2nd number" required /><br><br>  
    </td>
</tr>
<tr>
	<td align="center">
				<input type="submit" name="addbutton" value="SUM">
	</td>
</tr>
</table> 

</form>  
<?php  

   $flag = true; 
   if(isset($_POST['addbutton'])){
       $number1 = $_POST['number1']; 	
       if(!is_numeric($number1)){
           $flag = false; 
           echo "Enter Valid Value of Number 1"; 
       }
       else
           $number1 = $_POST['number1']; 

       $number2 = $_POST['number2']; 
       if(!is_numeric($number2)){
           $flag = false; 
           echo "<br>Enter Valid Value of Number 2"; 
       }
       else
           $number2 = $_POST['number2']; 
       
       if($flag){
       $sum = $number1 + $number2;
       echo "<br><br>The sum of $number1 and $number2 is: ".$sum;  
       }
   }

?>       
</body>  
</html>  

