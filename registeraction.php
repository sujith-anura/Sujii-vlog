<?php

$name = $_POST['uname'];
$email = $_POST['mail'];
$password = $_POST['pswd'];

$con = mysqli_connect("localhost","root","","loginSys");

/*if($con){
    echo "success";
}else{
    echo "failed";
}*/

$res = mysqli_query($con, "insert into user values('$name','$email','$password')");

if($res){
    echo "<script>";
    echo "alert('Successfully Registered.');";
    echo "window.location = 'index.html';";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Registration Failed. Try Again.');";
    echo "window.location = 'index.html';";
    echo "</script>";
}

?>