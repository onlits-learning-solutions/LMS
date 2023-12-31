<?php

use LMS\src\models\Book;

require '../autoload.php';

if (isset($_POST['submit'])) {
    $book = new Book($_POST);
    $book->save();
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
                <h1>ADD New Book</h1>
                <form action="" method="post">
                    <label for="id">ID</label>
                    <input type="text" placeholder="Enter Id of Book" required name="id" id="id" value="<?= Book::getBookId();?>">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Book Title">
                    <label for="edition">Edition Name</label>
                    <input type="text" name="edition" id="edition" placeholder="Enter edtion of Book">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" placeholder="Enter Book Author Name">
                    <label for="publication">Publication</label>
                    <input type="text" name="publication" id="publication" placeholder="Enter Publication of Book">
                    <label for="isbn10">ISBN10</label>
                    <input type="text" name="isbn10" id="1sbn10" placeholder="Enter 10 Digit ISBN10 Number">
                    <label for="isbn13">ISBN13</label>
                    <input type="text" name="isbn13" id="isbn13" placeholder="Enter 13 Digit ISBN13 Number">
                    <label for="pages">Pages</label>
                    <input type="text" name="pages" id="pages" placeholder="Enter Page Count of Book">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" placeholder="Enter Price of Book">

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