<?php
$con= mysqli_connect("localhost", "root", "", "conference")or die(mysqli_error($con));
session_start();
$id = mysqli_real_escape_string($con, $_POST['id']);
$pwd = mysqli_real_escape_string($con, ($_POST['pass']));
if($id=="admin")
{
    header('location: Admin.php');    
}
 else {
$login_query="SELECT emp_id  FROM `signup` WHERE `emp_id` = '$id' AND `password` like '%$pwd%'";
$check_query= mysqli_query($con, $login_query) or die (mysqli_error($con));
$check_row= mysqli_num_rows($check_query);
if($check_row>=1)
{    
    $_SESSION['id']=$id;
    $message = "Login Sucsessfully.";
    echo "<script type='text/javascript'>alert('$message'); window.location='index.php';</script>";
}
else
{
    $message = "Incorrect Employee Id or Password.";
    echo "<script type='text/javascript'>alert('$message'); window.location='login.php';</script>";
}
 }
?>

