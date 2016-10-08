<?php
session_start();
include("db.php");
if(!isSet($_POST['user_id']) || !isSet($_POST['password_old']) || !isSet($_POST['password_new'])) {
	header('HTTP/1.1 422 Improceccable entity',422,true);
	header('Content-Type: application/json');
	$error = array('status' => 'failure', 'error' => 'missing parameters');
	echo json_encode($error);
	die();
}
$userId=$_POST['user_id'];
$password=md5(mysqli_real_escape_string($db,$_POST['password_old'])); 
$newPassword=md5(mysqli_real_escape_string($db, $_POST['password_new']));
$result=mysqli_query($db,"SELECT uid FROM users WHERE uid='$userId' and password='$password' AND active='1'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1) {
	$sql = "UPDATE users SET password = '$newPassword' WHERE uid='$userId' and password='$password' AND active='1'";
	if (mysqli_query($db, $sql)) {
		$_SESSION['login_user'] = '';
		$error = array('status' => 'success', 'message' => 'Password changed successfully');
		echo json_encode($error);
		die();
	} else {
		header('HTTP/1.1 500 Internal Server Error',500,true);
		$error = array('status' => 'failure', 'error' => 'Internal server error '+mysqli_error($db));
		echo json_encode($error);
		die();
	}		  
} else {
	header('HTTP/1.1 401 Unaututhorized',401,true);
	header('Content-Type: application/json');
	$error = array('status' => 'failure', 'error' => 'Incorrect password');
	echo json_encode($error);
	die();
}
?>