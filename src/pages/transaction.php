<?php

use LMS\src\models\Transaction;

require '../autoload.php';

$transactions = Transaction::index();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Books</title>
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
                <main class="grid-2">
                    <a href="new-transaction.php">New Transaction</a>
                    <table class='content-table'>
                        <thead>
                            <tr>
                                <th>transaction_id</th>
                                <th>date</th>
                                <th>time</th>
                                <th>book_id</th>
                                <th>member_id</th>
                                <th>return_by_date</th>
                                <th>actual_return_date</th>
                                <th>fine</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                

                            </tr>
                        </thead>
                        <?php foreach ((array) $transactions as $transaction) { ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?= $transaction['transaction_id'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['date'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['time'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['book_id'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['member_id'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['return_by_date'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['actual_return_date'] ?>
                                    </td>
                                    <td>
                                        <?= $transaction['fine'] ?>
                                    </td>
                                    <div class='edit'>
                                        <td><a href="edit-transaction.php?transaction_id=<?= $transaction['transaction_id'] ?>">Edit</a></td>
                                        <td><a href="return.php?transaction_id=<?= $transaction['transaction_id'] ?>">Return</a></td>
                                        <td><a href="delete-transaction.php?transaction_id=<?= $transaction['transaction_id'] ?>">Delete</a></td>

                                       
                                    </div>
                                </tr>
                            </tbody>
                        <?php }
                        ?>
                </main>
            </main>
            </table>

        </div>
    </div>
    <footer class="footer">
        <?php require 'footer.php' ?>
    </footer>
    </div>

</body>

</html>