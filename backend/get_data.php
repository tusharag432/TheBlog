<?php

session_start();
include_once("connection.php");

$id = $_POST['id'];
$query = "SELECT * FROM posts WHERE id = '$id'";

$result = $conn->query($query)->fetch_assoc();

echo json_encode(array('success'=>true,'title'=>$result['title'],'description'=>$result['description'],'content'=>$result['content'],'image'=>$result['image'],'id'=>$result['id'],'author'=>$result['author'],'category'=>$result['category']));  


?>