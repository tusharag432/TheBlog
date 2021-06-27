<?php 
include_once("connection.php");


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