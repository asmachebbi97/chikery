 <?php 

$name ="";
$email = "";
$phone="";
$message=""; 

 
 session_start(); //Start session at the beginning of your script  
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "chickery";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
echo "<script type='text/javascript'> alert('connection error'); </script>" ;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['msg'];


	 $sql = "INSERT INTO reclamation (name, email, phone, message) VALUES ('".$name."', '".$email."', '".$phone."' , '".$message."')";
	  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'> alert('reclamation succesfully sended !!!!'); </script>" ;
          } 
		  else {
             echo "<script type='text/javascript'> alert('error send '); </script>" ;
                }
           }
     else 
	 
	 { echo "<script type='text/javascript'> alert('erreurr'); </script>" ;}




 
 ?>