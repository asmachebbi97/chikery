 <?php 

$username ="";
$password = "";
$email="";
$address=""; 
$birthdate="";
 
 //Start session at the beginning of your script  
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
 
	 
$username=$_POST['username1'];
$password=$_POST['password1'];
$email=$_POST['email'];
$address=$_POST['address'];
$birthdate=$_POST['birthdate'];
 session_start();

$sql1="SELECT email, name FROM users where email='".$email."' and name='".$username."'" ;
$result = mysqli_query($conn,$sql1);
$count=mysqli_num_rows($result); 

if ($count >0 ) {
 echo "<script type='text/javascript'> alert('user exist!!!!'); </script>" ;
}
 else {
	 $sql = "INSERT INTO users (name, email, birth, password, address) VALUES ('".$username."', '".$email."', '".$birthdate."' , '".$password."' , '".$address."')";
	  if ($conn->query($sql) === TRUE) {
 echo "<script type='text/javascript'> alert('user inserted!!!!'); </script>" ;
} else {
  echo "<script type='text/javascript'> alert('error insert '); </script>" ;
}
}}
    




 
 ?>