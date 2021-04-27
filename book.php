 <?php 

$name ="";
$email = "";
$phone="";
$nbr=""; 
$dateB="";
$timeB=""; 

 
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
 
	 
$name=$_POST['nameB'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$nbr=$_POST['nbr'];
$dateB=$_POST['date'];
$timeB=$_POST['time'];



	 $sql = "INSERT INTO book (date, name, phone, nbr, time, email) VALUES ('".$dateB."', '".$name."', '".$phone."' , '".$nbr."' , '".$timeB."' , '".$email."')";
	  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'> alert('reservation succesfully done !!!!'); </script>" ;
          } 
		  else {
             echo "<script type='text/javascript'> alert('error reservation '); </script>" ;
                }
           }
     else 
	 
	 { echo "<script type='text/javascript'> alert('erreurr'); </script>" ;}




 
 ?>