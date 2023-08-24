<?php

use LMS\src\models\Book;

require '../autoload.php';

$books = Book::index();

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
                    <a href="new-book.php">Add New Book</a>
                    <table class='content-table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Edition</th>
                                <th>Author</th>
                                <th>Publication</th>
                                <th>Isbn10</th>
                                <th>Isbn13</th>
                                <th>Pages</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <?php foreach ((array) $books as $book) { ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?= $book['id'] ?>
                                    </td>
                                    <td>
                                        <?= $book['title'] ?>
                                    </td>
                                    <td>
                                        <?= $book['edition'] ?>
                                    </td>
                                    <td>
                                        <?= $book['author'] ?>
                                    </td>
                                    <td>
                                        <?= $book['publication'] ?>
                                    </td>
                                    <td>
                                        <?= $book['isbn10'] ?>
                                    </td>
                                    <td>
                                        <?= $book['isbn13'] ?>
                                    </td>
                                    <td>
                                        <?= $book['pages'] ?>
                                    </td>
                                    <td>
                                        <?= $book['price'] ?>
                                    </td>
                                    <div class='edit'>
                                        <td><a href="edit-book.php?id=<?= $book['id'] ?>">Edit</a></td>

                                        <td><a href="delete-book.php?id=<?= $book['id'] ?>">Delete</a></td>
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