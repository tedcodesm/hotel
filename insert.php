<?php
@include('connection.php');
session_start();

if(isset($_POST['create_user'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];     

}

$insert="INSERT INTO hotel (username,password,email) VALUES('$username','$password','$email')" ;
$result=mysqli_query($conn,$insert);

if($result){
    header("location:login.php");
}else{
    echo "Error creating user: ". mysqli_error($conn);
}

$result->close();
?>