<form action= "/php1/student.php"   method = "POST">
<h1>Student Form:</h1></br>

First Name:<input type="text" name="firstname"> Last name:<input type="text" name="lastname">.</br>
 </br>
Date of Birth:<input type= "date" name="dob">.</br>
</br>
        Age:<input type= "number" name="age"> years.</br>
</br>
E mail id:
<input type= "email" name = "email">

Contact Number:<input type ="number" maxlenght="10" name="contactNo">.</br>.
</br>
     Address:</br>
<textarea rows ="4" cols= "50" name="address" >.
</textarea> </br>
</br>
<input type ="submit"  name="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "abc123";
$dbname="ashu";

 $conn = new mysqli($servername, $username, $password,$dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student_table (firstname,lastname,email,address,contact,age)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[address]','$_POST[contactNo]','$_POST[age]','$_POST[email]')";
 

if ($conn->query($sql)===true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>