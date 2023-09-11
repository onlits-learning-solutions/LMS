<?php
session_start();
$user_id = $_SESSION['user_id'];
?>
<div class='nav'>
  <div class="logo"><i href="./dashboard.php"><img src="./images/logo.png"></i></div>
  <div class='topnav'>

    <a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    <a href="../pages/library-profile.php"><i class="fa-solid fa-user"></i></a>
    <a class='active'>Welcome,
      <?= $user_id ?>
    </a>
    <a href="./dashboard.php"><i class="fa-solid fa-house"></i></a>
  </div>
</div>