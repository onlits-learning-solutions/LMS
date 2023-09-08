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
        <div class="form-col-2">
                    <div class="left-col">
                        <form action="" method="post">
                            <input type="hidden" name="book_key" value="">
                            <label for="book_id">Book id</label>
                            <input type="text" name="book_id" id="book_id" onblur="fetchTransaction(this.value)" value="<?php if (isset($transaction['book_id'])) {
                                echo $transaction['book_id'];
                            } ?>" required>
                            <label for="transaction_id">transaction_id</label>
                            <input type="text" name="transaction_id" id="transaction_id" value="<?php if (isset($transaction['transaction_id'])) {
                                echo $transaction['transaction_id'];
                            } ?>" readonly>
                            <label for="date">date</label>
                            <input type="text" name="date" id="date" value="<?php if (isset($transaction['date'])) {
                                echo $transaction['date'];
                            } ?>" readonly>
                            <label for="time">time</label>
                            <input type="text" name="time" id="time" value="<?php if (isset($transaction['time'])) {
                                echo $transaction['time'];
                            } ?>" readonly>
                            <label for="member_id">member_id</label>
                            <input type="text" name="member_id" id="member_id" value="<?php if (isset($transaction['member_id'])) {
                                echo $transaction['member_id'];
                            } ?>" readonly>
                            <label for="return_by_date">return_by_date</label>
                            <input type="text" name="return_by_date" id="return_by_date" value="<?php if (isset($transaction['return_by_date'])) {
                                echo $transaction['return_by_date'];
                            } ?>" readonly>
                            <label for="actual_return_date">actual_return_date</label>
                            <input type="text" name="actual_return_date" id="actual_return_date" value="<?php if (isset($transaction['actual_return_date'])) {
                                echo $transaction['actual_return_date'];
                            } ?>" readonly>
                            <label for="fine">fine</label>
                            <input type="text" name="fine" id="fine" value="<?php if (isset($transaction['fine'])) {
                                echo $transaction['fine'];
                            } ?>" readonly>
                        </form>
                    </div>
        </div>
        </main>
        </div>
</div>

        <footer class="footer">
                <?php require 'footer.php' ?>
            </footer>
    </div>
    <script>
        function fetchTransaction(transaction_id) {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let book = JSON.parse(this.responseText);
                    document.getElementById('transaction_id').value = transaction_id.transaction_id;
                    document.getElementById('date').value = transaction_id.date;
                    document.getElementById('time').value = transaction_id.time;
                    document.getElementById('member_id').value = transaction_id.member_id;
                    document.getElementById('return_by_date').value = transaction_id.return_by_date;
                    document.getElementById('actual_return_date').value = transaction_id.actual_return_date;
                    document.getElementById('fine').value = transaction_id.fine;
                }
            };
            xhr.open("GET", "fetch.php?type=transaction&id=" + transactionId);
            xhr.send();
        }
        </script>
</body>

</html>