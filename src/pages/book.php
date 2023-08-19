<?php

require 'Book.php';

use LMS\src\models\Book;

$bookob = new Book();
$books = $bookob->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>edtion</th>
            <th>auther</th>
            <th>publication</th>
            <th>isbn10</th>
            <th>isbn13</th>
            <th>pages</th>
            <th>price</th>
            <th>cover</th>

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
                    <?= $book['edtion'] ?>
                </td>
                <td>
                    <?= $book['auther'] ?>
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
                <td>
                    <?= $book['cover'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>