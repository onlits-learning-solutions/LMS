<?php

use LMS\src\models\Book;

require '../autoload.php';


if (isset($_POST['submit'])) {
    $bookob = new Book();
    $book = $bookob->update($_POST);
} else {
    $book = Book::details($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit book</title>
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
            <h1>Edit Book</h1>
            <form action="" method="post">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" readonly value="<?= $book['id'] ?>">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?= $book['title'] ?>">
                <label for="edition">Edition</label>
                <input type="text" name="edition" id="edition" value="<?= $book['edition'] ?>">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" value="<?= $book['author'] ?>">
                <label for="publication">Publication</label>
                <input type="text" name="publication" id="publication" value="<?= $book['publication'] ?>">
                <label for="isbn10">ISBN10</label>
                <input type="text" name="isbn10" id="isbn10" value="<?= $book['isbn10'] ?>">
               <label for="isbn13">ISBN13</label>
                <input type="text" name="isbn13" id="isbn13" value="<?= $book['isbn13'] ?>">
                 <label for="pages">Pages</label>
                <input type="text" name="pages" id="pages" value="<?= $book['pages'] ?>">
              <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?= $book['price'] ?>">
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