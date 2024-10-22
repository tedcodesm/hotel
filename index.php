<?php 
@include ('layouts/navbar.php');
@include ('includes/book.php');
?>

<div class="justify-center items-center flex flex-col">
    <h1 class="text-2xl font-bold text-gray-800">Welcome to Hotel</h1>

    <p class="text-gray-500">Discover our amazing offerings and book your perfect stay</p>
   <?php @include('includes/second.php');?>
</div>
<?php  
@include('includes/third.php');
@include('includes/fourth.php');
@include('layouts/footer.php');
?>
