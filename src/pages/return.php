<?php

use LMS\src\models\Book;
use LMS\models\Member;

use LMS\src\models\Transaction;

require '../autoload.php';

if (isset($_POST['submit'])) {
    Transaction::return($_POST);
}


$transaction_id = $_GET['transaction_id'];
$transaction = Transaction::details($transaction_id);
$book = Book::details($transaction['book_id']);
$member = Member::details($transaction['member_id']);

// ----------- Return By Date --------
$return_by_date = date_format(date_add(date_create(date("Y-m-d")), date_interval_create_from_date_string("15 days")), "Y-m-d");
$actual_return_date = date("Y-m-d");

$actual_return_date = "$actual_return_date";
$return_by_date = "$return_by_date";
if (strtotime($actual_return_date) <= strtotime($return_by_date)) {
    $fine = 0;
} else {

    $date1 = new DateTime($return_by_date);
    $date2 = new DateTime($actual_return_date);
    $interval = $date1->diff($date2);
    $days_difference = $interval->days;
    $fine = $days_difference * 2;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Return</title>
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
                <h1>Return book</h1>


                <div class="form-col-2">

                    <div class="left-col">
                        <form action="" method="post">
                            <label for="transaction_id">Transaction Id</label>
                            <input type="text" name="transaction_id" id="transaction_id" value="<?php if (isset($transaction['transaction_id'])) {
                                echo $transaction['transaction_id'];
                            } ?>" readonly>
                            <label for="book_id">Book id</label>
                            <input type="text" name="book_id" id="book_id"
                                value="<?= isset($book['id']) ? $book['id'] : null ?>" readonly>
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="<?php if (isset($book['title'])) {
                                echo $book['title'];
                            } ?>" readonly>
                            <label for="edition">Edition</label>
                            <input type="text" name="edition" id="edition" value="<?php if (isset($book['edition'])) {
                                echo $book['edition'];
                            } ?>" readonly>
                            <label for="author">Author</label>
                            <input type="text" name="author" id="author" value="<?php if (isset($book['author'])) {
                                echo $book['author'];
                            } ?>" readonly>
                            <label for="publication">Publication</label>
                            <input type="text" name="publication" id="publication" value="<?php if (isset($book['publication'])) {
                                echo $book['publication'];
                            } ?>" readonly>
                            <label for="isbn10">isbn10</label>
                            <input type="text" name="isbn10" id="isbn10" value="<?php if (isset($book['isbn10'])) {
                                echo $book['isbn10'];
                            } ?>" readonly>
                            <label for="isbn13">isbn13</label>
                            <input type="text" name="isbn13" id="isbn13" value="<?php if (isset($book['isbn10'])) {
                                echo $book['isbn13'];
                            } ?>" readonly>

                    </div>
                    <div class="right-col" name="member">

                        <input type="hidden" name="member_key" value="">

                        <label for="member_id">Member id</label>
                        <input type="text" name="member_id" id="member_id" onblur="fetchMember(this.value)" value="<?php if (isset($member['member_id'])) {
                            echo $member['member_id'];
                        } ?>">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php if (isset($member['name'])) {
                            echo $member['name'];
                        } ?>" readonly>
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" id="gender" value="<?php if (isset($member['gender'])) {
                            echo $member['gender'];
                        } ?>" readonly>
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="text" name="date_of_birth" id="date_of_birth" value="<?php if (isset($member['date_of_birth'])) {
                            echo $member['date_of_birth'];
                        } ?>" readonly>

                    </div>
                </div>
                <label for="return_by_date">Return By date</label>
                <input type="text" name="return_by_date" id="return_by_date" value="<?= $return_by_date ?>">
                <label for="actual_return_date">Actual Return date</label>
                <input type="text" name="actual_return_date" id="actual_return_date" value="<?= $actual_return_date ?>">
                <label for="fine">Fine</label>
                <input type="text" name="fine" id="fine" value="<?= $fine ?>">



                <button name="submit">Submit </button>


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