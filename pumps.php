<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="";

$pumpname = $_POST ['pumpname'];
$tank_id = $_POST ['tank_id'];
$description = $_POST ['description'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

if ($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}

$sql = "INSERT INTO station_pumps (pumpname,tank_id,description) VALUES ('$pumpname','$tank_id','$description')";

if ($conn->query($sql) === TRUE){
	echo "Thank you! Your request has been received. Enjoy your week :) Redirecting...";
	header('refresh:1; url=index.php?page=pumps');
}else {
	echo "Error." . $sql . "<br>" .$conn->error;
}
$conn->close();
?>
