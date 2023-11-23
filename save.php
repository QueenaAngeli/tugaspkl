<?php
include 'conn.php';
// $id = $_GET['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
if($name != "" && $msg != ""){
	$sql = $conn->query("INSERT INTO discussion (student, post)
			VALUES ('$name', '$msg')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>