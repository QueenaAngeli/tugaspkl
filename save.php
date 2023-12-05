<?php
// include 'conn.php';
// // $id = $_GET['id'];
// $name = $_POST['name'];
// $msg = $_POST['msg'];
// if($name != "" && $msg != ""){
// 	$sql = $conn->query("INSERT INTO discussion (student, post)
// 			VALUES ('$name', '$msg')");
// }
// else{
// 	echo json_encode(array("statusCode"=>201));
// }
// $conn = null;

?>


<?php
include 'conn.php';

$name = $_POST['name'];
$msg = $_POST['msg'];

$query_sql = "INSERT INTO discussion (student, post) VALUES ('$name','$msg')";

if (mysqli_query($conn, $query_sql)) {
	header("Location: services.php");
} else {
	echo "Feedback Gagal : " . mysqli_error($conn);
}

?>