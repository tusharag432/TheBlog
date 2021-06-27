<?php

session_start();
include_once("connection.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$title =  mysqli_real_escape_string($conn,trim($_POST['title']));
$description = mysqli_real_escape_string($conn,trim($_POST['description']));
$description = substr($description,0,196).'...';
$content = mysqli_real_escape_string($conn,trim($_POST['content']));
$id = @$_POST['updateId'];
$image = @$_FILES['image']['name'];
$category=$_POST['category'];
$author=mysqli_real_escape_string($conn,trim($_POST['author']));


if(empty($id)){
$query = "INSERT INTO posts(title, description, content,image,author,category) VALUES('$title','$description','$content','$image','$author','$category')";

}
else{
    if(empty($image))
    $query="UPDATE posts SET title='$title', description = '$description', content = '$content', author = '$author', category='$category' WHERE id = $id";
    else
    $query="UPDATE posts SET title='$title', description = '$description', content = '$content', image = '$image', author = '$author', category='$category' WHERE id = $id";
    
}
echo $query;
if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>