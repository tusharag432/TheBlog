<?php

require_once('connection.php');
session_start();
unset($_SESSION['login']);
unset($_SESSION['name']);

$password = md5($_POST['password']);
if (filter_var($_POST['uname'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['uname'];
    $query = "SELECT * from users where email='$email'";
} else {
    $uname = $_POST['uname'];
    $query = "SELECT * from users where username='$uname'";
}

$result = $conn->query($query);
if (mysqli_num_rows($result) > 0) {
    $row = $result->fetch_assoc();
    if ($row['password'] == $password) {

        $_SESSION['login']=$row['id'];
        $_SESSION['name']=explode(' ',trim($row['name']))[0];
        $_SESSION['role']=$row['role'];
        echo 'success';
    } else
        echo 'failure';
} else
    echo 'failure';
?>