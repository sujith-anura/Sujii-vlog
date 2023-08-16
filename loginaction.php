<?php

$un = $_POST['person'];
$ps = $_POST['password'];

$con1 = mysqli_connect("localhost","root","","loginSys");

$result = mysqli_query($con1, "select * from user where username = '$un' and password = '$ps'");

$b = false;
while($row = mysqli_fetch_array($result)){
    $b = true;
}

if($b){
    header("location:afterlogin.html");
}else{
    echo "<script>";
    echo "alert('Wrong User, Try Again.');";
    echo "window.location = 'index.html';";
    echo "</script>";
}

?>