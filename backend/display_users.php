<?php

session_start();
include_once("connection.php");

$keyword1 = @$_POST['username'];
$keyword2 = @$_POST['email'];
$keyword3 = @$_POST['user_name'];
$keyword4 = @$_POST['role'];

$where = "";
	
    if(empty($keyword1))
	{}
	else
	{
        $where .= "WHERE username like '%".$keyword1."%' ";
    }
	
    if(empty($keyword2))
	{}
	else
	{
        if(empty($where))
		{
            $where .= "where email like '%".$keyword2."%' ";
        }
		else
		{
            $where .= " AND email like '%".$keyword2."%' ";
        }    
    }

    if(empty($keyword3))
	{}
	else
	{
        if(empty($where))
		{
            $where .= "WHERE name like '%".$keyword3."%' ";
        }
		else
		{
            $where .= " AND name like '%".$keyword3."%' ";
        }    
    }

    if(empty($keyword4)){}
	else
	{
        if(empty($where))
		{
            $where .= "WHERE role like '%".$keyword4."%' ";
        }
		else
		{
            $where .= " AND role like '%".$keyword4."%' ";
        }    
    }


$query = "SELECT * FROM users $where" ;
$result = $conn->query($query);
$count=1;

while($row = $result->fetch_assoc()){
    $DOJ= $row['DOJ'];
    $username = $row['username'];
    $email = $row['email'];
    $name = $row['name'];
    $role = $row['role'];
    $id = $row['id'];
    
    echo "<tr>
    <td >".$count."</td>
    <td class='text-center'>".$DOJ."</td>
    <td class='text-center'>".$username."</td>
    <td class='text-center'>".$email."</td>
    <td class='text-center'>".$name."</td>
    <td class='text-center'>
    <form>
    <select name='role' id='no".$id."' class='form-control form-control-sm'>";
    if($role=='admin')
    echo "<option value='admin' selected>admin</option>";
    else
    echo "<option value='admin'>admin</option>";
    if($role=='author')
    echo "<option value='author' selected>author</option>";
    else
    echo "<option value='author'>author</option>";
    if($role=='viewer')
    echo "<option value='viewer' selected>viewer</option>";
    else
    echo "<option value='viewer'>viewer</option>";
    echo 
    "</select>
    </form>
    </td>    
    <td class='text-center'>
    <a onclick='updateUser(".$id.")' style='color: rgb(34, 194, 34);'><i class='fa fa-edit' style='font-size:24px;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    ";
    if($role=='viewer'){
    echo "<a onclick='deleteUser(".$id.")' style='color: red'; ><i class='fa fa-trash' style='font-size:24px;'></i></a>";
    }else{
        echo "<a style='color: red'; class='disabled'><i class='fa fa-trash' style='font-size:24px;'></i></a>";
    }
    echo "</td>";
    $count++;
}
 
?>