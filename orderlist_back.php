<?php 
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "project");
$status = 'OK';
$content = [];
if (mysqli_connect_errno()) {
	$status = 'ERROR';
	$content = mysqli_connect_error();
	}
$query = " SELECT * FROM `order`";

$query_check= mysqli_query( $con , $query);
if ($result = mysqli_query($con, $query)) {
	/* fetch associative array */
	while ($row = mysqli_fetch_assoc($result)) {
	$content[] = $row; // push value to array
	}
	}
	$data = ["status" => $status, "content" => $content];
header('Content-type: application/json');
echo json_encode($data);
?>       
						