<?php
echo "connnection";
$conn=mysqli_connect("localhost","root","","booking");
$sql = "SELECT first_name,last_name,phone,age FROM details";
$result = $conn->query($sql);
?>
<?php

$first_name=$_REQUEST["first_name"];
$last_name=$_REQUEST["last_name"];
$phone=$_REQUEST["phone"];
$age=$_REQUEST["age"];
$conn=mysqli_connect("localhost","root","","booking");
$sql="insert into details values('".$first_name."','".$last_name."''".$phone."','".$age."')";
	mysqli_query($conn,$sql);
    mysqli_close($conn);

?>