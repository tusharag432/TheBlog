<?php 
$server = "localhost";
$database = "blog";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$database);

$field = $_POST['field'];
$value = $_POST['value'];

$query = "SELECT * from users where $field = '$value'";

$result = $conn->query($query);

if(mysqli_num_rows($result)==0){
echo true;
}
else
echo false;

?>