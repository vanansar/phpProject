<?php

require('connection.php');
$id =$_POST['id']; 
$name=$_POST['name'];
$email =$_POST['email']; 
$number =$_POST['number']; 
// echo $name;
$result = $conn->query("UPDATE tb_users SET user_name='$name', `user_email`='$email' , `user_mobile`='$number'  WHERE user_id=$id");

// header('location: inbox.php');

if ($result) {
    header('location: inbox.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
    header('location: edit_user.php');
}
?>