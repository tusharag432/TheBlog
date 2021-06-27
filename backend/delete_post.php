<?php 

session_start();

include_once("connection.php");


$id = $_POST['id'];

$query = "DELETE FROM posts WHERE id = '$id'";
$conn->query($query);

?>