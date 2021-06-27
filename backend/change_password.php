<?php

require_once('connection.php');
$token = $_POST['token'];
$password = md5($_POST['password']);
$query = "SELECT * FROM passwords_reset where token ='$token'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$email = $row['email'];

$query = "DELETE FROM passwords_reset WHERE token='$token'";

$conn->query($query);

$query = "UPDATE users SET password = '$password' WHERE email ='$email'";

$conn->query($query);
?>