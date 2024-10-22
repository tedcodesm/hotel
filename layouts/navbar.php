<?php 
@include('connection.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="items-center ">
<img class="object-cover w-full h-screen relative" src="assets/third best.jpeg" alt="">
<div class="absolute top-0 w-full">
 
<!-- navbar -->
    <nav class="bg-black bg-opacity-50 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="#" class="text-white font-bold text-xl">Hotel Booking</a>
            </div>
            <div class="flex items-center">
                <ul class="list-none flex">
                    <li class="mr-4">
                        <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="mr-4">
                        <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="mr-4">
                        <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li class="mr-4">
                        <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-google"></i></a>
                    </li>
                    <div class="px-4">
                    <div class="flex flex-row px-4 justify-between items-center">

      <?php if(  $_SESSION['logged_in'] = true){?>
            <div><a href="logout.php"><i class="fa fa-power-off text-xl px-4 text-red-500"></i></a></div>         
        <?php } else{ ?>
     <div> <a class="px-4" href="login.php"><button class="flex items-center bg-gradient-to-l from-yellow-300 to-blue-600 text-white  rounded-xl p-1 ps-4 px-4 font3">Register</button></a></div>
      <?php } ?>
      </div>
                    </div>
                </nav>

<!-- second navbar -->

<div class="items-center justify-center flex flex-row px-4 py-2 space-x-1">
    <div class="text-gray-600 bg-white  text-md font-semibold px-4 py-[10px] space-x-4">
        <a class="text-red-500 font-bold text-md" href="">Home</a>
        <a href="">About us <i class="fa fa-caret-down text-sm"></i></a>
        <a href="">Rooms <i class="fa fa-caret-down text-sm"></i></a>
        <a href="">Services <i class="fa fa-caret-down text-sm"></i></a>
        <a  href="">Gallery  <i class="fa fa-caret-down text-sm"></i></a>
        <a href="">Blog  <i class="fa fa-caret-down text-sm"></i></a>
        <a href="">Contact  <i class="fa fa-caret-down text-sm"></i></a>
    </div>
    <div class="text-white font-bold bg-pink-600 px-4 py-[10px]">
    <a class="bg-pink-600 text-white font-bold py-2 rounded-md   px-2" href="">
        <button>
            Book now
        </button>
    </a>
    </div>
    </div>

    <div class="justify-center items-center text-white flex flex-col py-2 md:pt-[200px] space-y-4">
        <h1 class="text-5xl font-bold">Welcome to Hotel</h1>
        <p>The place where you look to</p>
        <a href="">
        <button class="px-8 py-2 text-black font-semibold text-md bg-white hover:bg-red-600 rounded-md">Explore Now <i class="fa fa-arrow-right text-red-400"></i></button>
        </a>
    </div>
<!-- end of the div with absolute and relative -->
</div>
</div>

</body>
</html>