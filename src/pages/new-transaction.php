<?php

use LMS\src\models\Transaction;

require '../autoload.php';

if (isset($_POST['submit'])) {
    $transaction = new Transaction(
        $_POST['date'],
        $_POST['time'],
        $_POST['book_id'],
        $_POST['member_id'],
        $_POST['return_by_date'],
        $_POST['actual_return_date'],
        $_POST['fine']
    );
    $transaction->save();
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD New Book</title>
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
            <main>
                <h1>New Transaction</h1>
                <form action="" method="post">
                    
                    <label for="date">Date</label>
                    <input type="text" name="date" id="date">
                    <label for="time">Time</label>
                    <input type="text" name="time" id="time">
                    <label for="book_id">Book id</label>
                    <input type="text" name="book_id" id="book_id">
                    <label for="member_id">Member id</label>
                    <input type="text" name="member_id" id="member_id">
                    <label for="return_by_date">Return date</label>
                    <input type="text" name="return_by_date" id="return_by_date">
                    <label for="actual_return_date">actual_return_date</label>
                    <input type="text" name="actual_return_date" id="actual_return_date">
                    <label for="fine">Fine</label>
                    <input type="text" name="fine" id="fine">
                    

                    <button name="submit">Submit</button>
                </form>
            </main>
        </div>
    </div>

    </div>
    </div>
    <footer class="footer">
        <?php require 'footer.php' ?>
    </footer>
</body>

</html>