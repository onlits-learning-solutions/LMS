<?php

use LMS\src\models\Book;
use LMS\models\Member;
use LMS\src\models\Transaction;

require '../autoload.php';


$count = Book::count_book();
$countm = Member::count_member();
$countt = Transaction::count_transaction();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
   
</head>

<body>
    <div class="container">
        <div class="topnav">
            <?php require 'navbar.php' ?>
        </div>
        <div class="sub-container">
            <aside class="sidenav">
                <?php require 'sidebar.php' ?>
            </aside>
            <main class="main">
                <div class="content">
                    <!-- You content goes here!  -->
                    <h1>Dashboard</h1> <br>
                    <div class="card-container">
                        <div class="card">
                            <div class="card-title">
                            <img src="../pages/images/bookshelf.png">   
                                <p>Total Books</p>
                            </div>
                            <div class="card-body">
                                <p><?= $count[0] ?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-title">
                            <img src="../pages/images/team.png">
                                <p>Members</p>
                            </div>
                            <div class="card-body">
                            <p><?= $countm[0] ?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-title">
                            <img src="../pages/images/swear.png">
                                <p>Book Issued</p>
                            </div>
                            <div class="card-body">
                            <p><?= $countt[0] ?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-title">
                            <img src="../pages/images/available.png">
                                <p>Avilable Books</p>
                            </div>
                            <div class="card-body">
                                <p>4</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-title">
                            <img src="../pages/images/overdue.png">
                                <p>Overdue Books</p>
                            </div>
                            <div class="card-body">
                                <p>0</p>
                            </div>
                        </div>
                    
                        
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <?php require 'footer.php' ?>
                </footer>
            </main>
        </div>
    </div>
   
</body>

</html>