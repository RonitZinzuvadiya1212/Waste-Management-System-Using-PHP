 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "gabbbbbage";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
 }
 $mail =$_POST['email'];
 $pass =$_POST['psw'];
 $cpass =$_POST['cpsw'];
 

 $sql = "INSERT INTO register (name, password, cpassword) VALUES ('$mail','$pass','$cpass')";

 if ($conn->query($sql) === TRUE) {
 	echo "New record created successfully";
 	header("location: signin.php");
 } else {
 	echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();
 ?> 