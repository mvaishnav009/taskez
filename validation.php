<?php

session_start();


$con = mysqli_connect('localhost', 'root');
if($con){
    echo"Connection successful";
}
else{
    echo "no Connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from signin where email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header("location: projects.php");
}else{
    // header("location: index.php");
    header("Location:index.php?err=".urlencode ("Incorrect email or password"));
    exit();
}

?>