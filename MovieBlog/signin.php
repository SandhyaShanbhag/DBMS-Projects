<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from login where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password) {
            header('location:add.php');
        }else{
            $msg="<h4><b><font color=red>Invalid Email or Password<b></h4>";
            header("location:login1.php?msg=".$msg);
            
        }
    }else{
        $msg="<h3><b><font color=red>Invalid Email or Password<b></h3>";
            header("location:login1.php?msg=".$msg);
    }
}
?>