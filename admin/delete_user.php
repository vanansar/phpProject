<?php 

require('connection.php');
$id = $_POST['id'];


$sql = $conn->query("DELETE FROM tb_users WHERE user_id='$id'");

if (($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>











<?php


/*
$img=$_GET['img'];
$image='../users/pics/'.$img;

echo $image;
//die();
if($image=='../users/pics/male.jpg' || $image=='../users/pics/female.jpg')
{
	$sql = $conn->query("DELETE FROM tb_users WHERE user_id='$id'");

if($sql)
{
    echo ' Deleted ';
 
}
else {
  echo 'ERROR ON DELETION'; 
 
}
}
else{
	unlink($image);
	$sql = $conn->query("DELETE FROM tb_users WHERE user_id='$id'");

if($sql)
{
    echo ' Deleted ';
}
else {
  echo 'ERROR ON DELETION'; 
 
}
}

//die();
*/


?>
