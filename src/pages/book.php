<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:index?status=199');
}
$user_id = $_SESSION['user_id'];
require '../autoload.php';

use LMS\src\models\Book;

$bookob = new Book();
$books = $bookob->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Books</title>
</head>

<body>
   
    <div class="grid-container">
     <aside>
     <?php require('../sidebar.php') ?>
 </aside>
 
         <main class="grid-2">
         
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
                

            </tr>
            </thead>
            <?php foreach ($books as $book) { ?>
                <tbody>
                <tr  >
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
    ?> </main>
    </table>
    </div>
</body>

</html>