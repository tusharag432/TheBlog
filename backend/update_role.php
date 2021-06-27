<?php

require_once('connection.php');
$id = $_POST['id'];
$role = $_POST['role'];


$query = "UPDATE users SET role = '$role' WHERE id ='$id'";
$conn->query($query);

?>