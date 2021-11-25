
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Name=$_REQUEST["Name"];
$Phone=$_REQUEST["Phone"];
$Email=$_REQUEST["Email"];
$Departure=$_REQUEST["Departure"];
$Adults=$_REQUEST["Adults"];
$Children=$_REQUEST["Children"];
$Room=$_REQUEST["Room"];
$sql = "INSERT INTO details (Name,Phone,Email,Departure,Adults,Children,Room)
	 VALUES ('$Name','$Phone','$Email','$Departure','$Adults','$Children','$Room')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>