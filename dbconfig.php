<?php
$user_satis_deg = $_POST["satis_deg"];
$user_service = $_POST["service"];
$user = "root";
$password = "";
$host = "localhost";
$db_name = "client";
$con = mysqli_connect($host, $user, $password, $db_name);
$sql = "insert into satisfaction (satis_deg, service) values('".$user_satis_deg."','".$user_service."');";
if(mysqli_query($con,$sql)){
	echo "Data inserted successfully";
}
else{
	echo "some error occured";
}
mysqli_close($con);
?>