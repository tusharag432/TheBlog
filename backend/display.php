<?php

session_start();
include_once("connection.php");


$keyword1 = @$_POST['title'];
$keyword2 = @$_POST['description'];
$keyword3 = @$_POST['content'];
$keyword4 = @$_POST['image'];
$keyword5 = @$_POST['author'];
$keyword6 = @$_POST['category'];

$where = "";
	
    if(empty($keyword1))
	{}
	else
	{
        $where .= "WHERE title like '%".$keyword1."%' ";
    }
	
    if(empty($keyword2))
	{}
	else
	{
        if(empty($where))
		{
            $where .= "where description like '%".$keyword2."%' ";
        }
		else
		{
            $where .= " AND description like '%".$keyword2."%' ";
        }    
    }

    if(empty($keyword3))
	{}
	else
	{
        if(empty($where))
		{
            $where .= "WHERE content like '%".$keyword3."%' ";
        }
		else
		{
            $where .= " AND content like '%".$keyword3."%' ";
        }    
    }

    if(empty($keyword4)){}
	else
	{
        if(empty($where))
		{
            $where .= "WHERE image like '%".$keyword4."%' ";
        }
		else
		{
            $where .= " AND image like '%".$keyword4."%' ";
        }    
    }

    if(empty($keyword5)){}
	else
	{
        if(empty($where))
		{
            $where .= "WHERE author like '%".$keyword5."%' ";
        }
		else
		{
            $where .= " AND author like '%".$keyword5."%' ";
        }    
    }

    if(empty($keyword6)){}
	else
	{
        if(empty($where))
		{
            $where .= "WHERE category like '%".$keyword6."%' ";
        }
		else
		{
            $where .= " AND category like '%".$keyword6."%' ";
        }    
    }

$query = "SELECT * FROM posts $where" ;
$result = $conn->query($query);
$count=1;

while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $date = $row['date'];
    $title = $row['title'];
    $description = $row['description'];
    $content = $row['content'];
    $image = $row['image'];
    $author = $row['author'];
    $category = $row['category'];
    

    echo "<tr>
    <td >".$count."</td>
    <td class='text-center'>".$date."</td>
    <td class='text-center'><a href='post.php?id=".$id."' target='_blank'>".substr($title,0,55)."</a></td>
    <td class='text-center'>".substr($description,0,55)."</td>
    <td class='text-center'>".substr($content,0,100)."</td>
    <td class='text-center'><img src='uploads/".$image."'></td>
    <td class='text-center'>".$author."</td>
    <td class='text-center'>".$category."</td>
    <td class='text-center'><a onclick='deletePost(".$id.")'><i class='fa fa-trash' style='font-size:24px;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a onclick='getData(".$id.")'><i class='fa fa-edit' style='font-size:24px;'></i></a>
    </td>";
    $count++;
}
 
?>