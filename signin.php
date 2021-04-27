
 
 <?php 

$username ="";
$password = "";
 
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

if(( !empty($_POST['username'])&& !empty($_POST['password'] !='') ))
{
$username=$_POST['username'];
$password=$_POST['password'];
 session_start();
$_SESSION['username'] = $username;

$sql = "SELECT name, password FROM users where name='".$username."' and password='".$password."'" ;
$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result); 

if ($count >0 ) {
echo "<script type='text/javascript'> alert('yeeees'); </script> " ; 


 

}
 else {echo "<script type='text/javascript'> alert('user does not exist'); </script>" ;}
}
 
 ?>
 
 
