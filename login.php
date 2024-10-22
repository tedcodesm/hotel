<?php
@include('connection.php');
session_start();

$select="SELECT * FROM hotel";
$result=mysqli_query($conn,$select);


if(isset($_POST['user_details'])){
  $email=$_POST['email'];
  $password=md5($_POST['password']);



$select="SELECT * FROM hotel WHERE email='$email' && password='$password'";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result)>0){
  $_SESSION['email'] = $row['email'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['logged_in'] = true;
  
  header("location: index.php");
}
else{
 $error[] = 'Invalid credentials';
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.tailwindcss.com"></script>


  </head>
  <body>
    
    <div class=" container mt-5 col-lg-6 items-center justify-center flex">
    <form style="box-shadow: 2px 0px 4px black ;padding:2rem ; border-radius:10px;background-color:aliceblue;" action="" method="post" class="w-[700px]  ">
      <?php
      if(isset($error)){
      foreach($error as $error){
        echo '<div class="text-red-500 font-semibold ">'.$error.'</div>';
      }
    }
    ?>
      
      <label class="justify-start items-start flex"  for="email" >Email</label>
      <input name="email" type="email" class="form-control" required>
      <label  for="password" >Password</label>
      <input name="password"  type="password" class="form-control " required>  <br>
      <input class="btn btn-primary" name="user_details"  type="submit" value="login">
      <h7 style="margin-left: 20px;" class="text-secondary">Not registered yet? <a class="text-blue-600" href="register.php">create an account</a></h7>
    </form>
    </div>
  </body>
</html>
