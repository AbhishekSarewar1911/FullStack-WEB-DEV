
<html>
    <head>
        <title>PHP Form</title>
    </head>
<body>
<form method="POST" action="class-qn.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT<input type="text" name="phoneno" max="10" placeholder="Phone Number" required><br>
    CITY <select name="city">
        <option value="dehradun">Dehradun</option>
        <option value="delhi">Delhi</option>
        <option value="varanasi"></option>
    </select><br>
    Course<br>
    HTML <input type="checkbox" name="int1" value="HTML">
    CSS<input type="checkbox" name="int1" value="CSS">
    PHP<input type="checkbox" name="int1" value="PHP">
    MYSQL<input type="checkbox" name="int1" value="MYSQL"><br>

    Interests<br>
    Programming <input type="checkbox" name="int1" value="Programming">
    Sports<input type="checkbox" name="int1" value="Sports">
    Reading<input type="checkbox" name="int1" value="Reading">
    Games<input type="checkbox" name="int1" value="Games"><br>
    
    <input type="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    if(empty($_POST['username'])|| empty($_POST['email'])){
        echo "no input provided.....enter values";
    }
    if(empty($_POST['phoneno'])<10)
    echo "enter valid phone no";

    if(!empty($_POST['checkbox'] as $check)){
        echo $check;
    }
}
    else{
echo "no input";
}
?>