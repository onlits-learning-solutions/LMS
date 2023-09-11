<?php

use LMS\src\models\Transaction;

require '../autoload.php';


if (isset($_POST['submit'])) {
    $transactionob = new Transaction();
    $transaction = $transactionob->update($_POST);
} else {
    $transaction = Transaction::details($_GET['transaction_id']);
    
}

$return_by_date = date_format(date_add(date_create(date("Y-m-d")), date_interval_create_from_date_string("15 days")), "Y-m-d");
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
                <h1>New Transaction</h1>


                <div class="form-col-2">
                    <div class="left-col">
                        <form action="" method="post">
                            <input type="hidden" name="book_key" value="">
                            <label for="book_id">Book id</label>
                            <input type="text" name="book_id" id="book_id" onblur="fetchBook(this.value)" value="<?php if (isset($book['id'])) {
                                echo $book['id'];
                            } ?>" required>
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
                            <label for="transaction_id">transaction_id</label>
                            <input type="text" name="transaction_id" id="transaction_id" readonly
                                value="<?= $transaction['transaction_id'] ?>">
                            <label for="date">date</label>
                            <input type="text" name="date" id="date" value="<?= $transaction['date'] ?>">
                            <label for="time">time</label>
                            <input type="text" name="time" id="time" value="<?= $transaction['time'] ?>">

                            <label for="return_by_date">return_by_date</label>
                            <input type="text" name="return_by_date" id="return_by_date"
                                value="<?= $transaction['return_by_date'] ?>">
                            <label for="actual_return_date">actual_return_date</label>
                            <input type="text" name="actual_return_date" id="actual_return_date"
                                value="<?= $transaction['actual_return_date'] ?>">
                            <label for="fine">fine</label>
                            <input type="text" name="fine" id="fine" value="<?= $transaction['fine'] ?>">

                    </div>
                    <div class="right-col" name="member" method="post">

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

    <script>
        function fetchBook(bookId) {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let book = JSON.parse(this.responseText);
                    document.getElementById('title').value = book.title;
                    document.getElementById('edition').value = book.edition;
                    document.getElementById('author').value = book.author;
                    document.getElementById('publication').value = book.publication;
                    document.getElementById('isbn10').value = book.isbn10;
                    document.getElementById('isbn13').value = book.isbn13;
                }
            };
            xhr.open("GET", "fetch.php?type=book&id=" + bookId);
            xhr.send();
        }

        function fetchMember(memberId) {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let member = JSON.parse(this.responseText);
                    document.getElementById('name').value = member.name;
                    document.getElementById('gender').value = member.gender;
                    document.getElementById('date_of_birth').value = member.date_of_birth;

                }
            };
            xhr.open("GET", "fetch.php?type=member&id=" + memberId);
            xhr.send();
        }
    </script>
</body>

</html>