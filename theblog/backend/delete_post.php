<?php 

session_start();

$server = "localhost";
$dbname = "blog";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$dbname);

$id = $_POST['id'];

$query = "DELETE FROM posts WHERE id = '$id'";
$conn->query($query);

?>