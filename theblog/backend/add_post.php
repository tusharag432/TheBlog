<?php

session_start();
$server = "localhost";
$database = "blog";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$database);


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$id = @$_POST['updateId'];
$image = @$_FILES['image']['name'];
$category=$_POST['category'];
$author=$_POST['author'];


if(empty($id)){
$query = "INSERT INTO posts(title, description, content,image,author,category) VALUES('$title','$description','$content','$image','$author','$category')";
}
else{
    if(empty($image))
    $query="UPDATE posts SET title='$title', description = '$description', content = '$content', author = '$author', category='$category' WHERE id = $id";
    else
    $query="UPDATE posts SET title='$title', description = '$description', content = '$content', image = '$image', author = '$author', category='$category' WHERE id = $id";
}
$conn->query($query);