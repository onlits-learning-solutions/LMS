<?php

use LMS\src\models\Transaction;

require '../autoload.php';


if (isset($_POST['submit'])) {
    $transactionob = new Transaction();
    $transaction = $transactionob->update($_POST);
} else {
    $transaction = Transaction::details($_GET['transaction_id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
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
            <h1>Edit Member</h1>
            <form action="" method="post">
                <label for="transaction_id">transaction_id</label>
                <input type="text" name="transaction_id" id="transaction_id" readonly value="<?= $transaction['transaction_id'] ?>">
                <label for="date">date</label>
                <input type="text" name="date" id="date" value="<?= $transaction['date'] ?>">
                <label for="time">time</label>
                <input type="text" name="time" id="time" value="<?= $transaction['time'] ?>">
                <label for="date_of_birth">date_of_birth</label>
                <input type="text" name="date_of_birth" id="date_of_birth" value="<?= $transaction['date_of_birth'] ?>">
                <label for="book_id">book_id</label>
                <input type="text" name="book_id" id="book_id" value="<?= $transaction['book_id'] ?>">
                <label for="member_id">member_id</label>
                <input type="text" name="member_id" id="member_id" value="<?= $transaction['member_id'] ?>">
                <label for="return_by_date">return_by_date</label>
                <input type="text" name="return_by_date" id="return_by_date" value="<?= $transaction['return_by_date'] ?>">
                <label for="actual_return_date">actual_return_date</label>
                <input type="text" name="actual_return_date" id="actual_return_date" value="<?= $transaction['actual_return_date'] ?>">
                <label for="fine">fine</label>
                <input type="text" name="fine" id="fine" value="<?= $transaction['fine'] ?>">
               
                <button name="submit">Submit</button>
            </form>
        </main>
        </div>
</div>

        <footer class="footer">
                <?php require 'footer.php' ?>
            </footer>
    </div>
</body>

</html>