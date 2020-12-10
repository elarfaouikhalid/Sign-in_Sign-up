<?php
session_start();
$errors=array();
 $db=mysqli_connect('127.0.0.1','root','','registre')or die("cold not connect to database");
// $dsn='mysql:host=localhost;dbname=registre';
// $option=array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET username 'UTF8'");
// $db=new DPO($dsn,'root','',$option);
if(isset($_POST['register'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password1=$_POST['password'];
$password2=$_POST['password2'];
if(empty($username) || empty($email) || empty($password1) || $password1!=$password2)
{
array_push($errors,'information required');
}
else{
$sql=" INSERT INTO user(username,email,password) values('$username','$email','$password1') ";
$res=mysqli_query($db,$sql);
// $db->exec($sql);
    $_SESSION['username']=$username;
    // $_SESSION['success']="you are now logged ";
    header('location:index1.php');
    mysqli_close($db);
}
}
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}


if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    // if(empty($username))
    // {
    // array_push($errors,'username required');
    // }
    // if(empty($password))
    // {
    // array_push($errors,'password required');
    // }
    $qeury="select * from user where username='$username' and password='$password' ";
    $result=mysqli_query($db,$qeury);
    if(mysqli_num_rows($result))
    {
        $_SESSION['username']=$username;
        // $_SESSION['success']="login succesfuly ";
        header('location: index1.php');
    }
    else
    {
        array_push($errors,'invalid password or name');
    }
}
?>