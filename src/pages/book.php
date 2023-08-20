<?php

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
         
        <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>edition</th>
                <th>author</th>
                <th>publication</th>
                <th>isbn10</th>
                <th>isbn13</th>
                <th>pages</th>
                <th>price</th>
                

            </tr>
            <?php foreach ($books as $book) { ?>
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
                    <td><a href="edit-book.php?id=<?= $book['id'] ?>">Edit</a></td>
                            <td><a href="delete-book.php?id=<?= $book['id'] ?>">Delete</a></td>
                </tr>
            <?php }
    ?> </main>
    </table>
    </div>
</body>

</html>