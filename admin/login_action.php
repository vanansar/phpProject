<?php
session_start();
require('connection.php');

$em = $_POST['email'];
$pass = $_POST['pass'];

$res = $conn->query("select * from tb_admin where admin_Email='$em' AND admin_Password='$pass'");

$count = $res->num_rows;


if($count>0)
{
	$row=$res->fetch_assoc();
$_SESSION['adminEmail'] = $row['admin_Email'];
$_SESSION['adminId'] = $row['admin_Id'];
	//echo $_SESSION['adminEmail'];
	header('location: dashboard.php');	
}
else {
	//echo 'fail';
	header('location: index.php');
}	
?>