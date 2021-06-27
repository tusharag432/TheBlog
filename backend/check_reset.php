<?php

require_once('connection.php');
session_start();

if (filter_var($_POST['uname'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['uname'];
    $query1 = "SELECT email from users where email='$email'";
} else {
    $uname = $_POST['uname'];
    $query1 = "SELECT email from users where username='$uname'";
}

$result1 = $conn->query($query1);
if (mysqli_num_rows($result1) > 0) {

    $row1 = $result1->fetch_assoc();
    $email = $row1['email'];
    $token = bin2hex(random_bytes(50));


    $query2 = "SELECT * FROM passwords_reset where email = '$email'";
    $result2 = $conn->query($query2);
    
    if(mysqli_num_rows($result2)>0){
        $query3 = "UPDATE passwords_reset SET token ='$token' where email = '$email'";
    }else{
    $query3 = "INSERT INTO passwords_reset(email, token) VALUES ('$email', '$token')";
    }
    $result3 = $conn->query($query3);
    $to = $email;
    $subject = "Reset your password on The Blog";
    $msg = "Hi there, click on this <a href='localhost/project/reset_password.php?token=" . $token . "'>link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers  = "From: tusharagrawal9927@gmail.com\r\n"; 
    $headers .= "Content-type: text/html\r\n";
    mail($to, $subject, $msg, $headers);
    echo "success";

} else
    echo 'failure';
?>