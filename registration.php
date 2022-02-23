<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost', 'root');
if($con){
    echo"Connection successful";
}
else{
    echo "no Connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = (isset($_POST['user']));
$email = (isset($_POST['email']));
$pass = (isset($_POST['password']));

$q = " select * from signin where email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" duplicate data";
}else{
    $qy= " insert into signin(name, email, password) values ('$name' , '$email', '$pass')";
    mysqli_query($con, $qy);
}

?>