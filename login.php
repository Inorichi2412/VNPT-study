<?php
ob_start();
session_start();
include_once 'config.php';

if(isset($_POST["submit_login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $password=md5($password);
    if(isset($username)&&isset($password)){
        $sql="SELECT * FROM user WHERE username='$username' AND password ='$password'";
        $query=mysqli_query($conn,$sql);
        $rows=mysqli_num_rows($query);
        if($rows>0){
            $_SESSION["username"]=$username;
            $_SESSION["password"]=$password;
            header("location:VNPT.html");
        }
        else{
        echo '<center class="alert alert-danger">Tài khoản hoặc mật khẩu không đúng</center>';
        }
    }
}
?>