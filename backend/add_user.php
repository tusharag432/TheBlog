<?php


session_start();
unset($_SESSION['login']);
unset($_SESSION['name']);
include_once("connection.php");

$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';


$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];
$passwordEncoded = md5($password);

$query = "SELECT * from users where username = '$username' OR email = '$email'";
$result = $conn->query($query);


if(mysqli_num_rows($result)==0){

    $query2 = "INSERT INTO users(name, username , email,password) VALUES('$name','$username','$email','$passwordEncoded')";
    
    if($conn->query($query2)){
        echo "success";
    }
    else{
        echo "failure";
    }

}else{
    echo "notunique";
}







// $encrypted = encryptIt( $input );
// $decrypted = decryptIt( $encrypted );

// echo $encrypted . '<br />' . $decrypted;

// function encryptIt( $q ) {
//     $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
//     $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
//     return( $qEncoded );
// }

// function decryptIt( $q ) {
//     $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
//     $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
//     return( $qDecoded );
// }
?>