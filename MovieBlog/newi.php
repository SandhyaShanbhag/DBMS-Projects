<?php
include('connection.php');
$title = $_POST['title'];
$img = $_FILES['img']['name'];
$text = $_POST['text'];
$sql = "INSERT INTO content (title,img,txt)
    VALUES ('$title','$img','$text')";
if(mysqli_query($conn, $sql)){
    include('add.php');
} else{
    include('add.php');
}