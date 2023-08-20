<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:index?status=199');
}
$user_id = $_SESSION['user_id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class='nav'> 
    <div class='logo'>
     <a href="#" class="brand-logo">Logo</a>
    </div>  
<div class='topnav'>
    
   <a class='active'>Welcome <?= $user_id?></a>
    
 
  <a href="../index.php">Home</a>
  
  
 
</div>
</div>
</body>
</html>