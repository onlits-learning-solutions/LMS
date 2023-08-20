<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:index?status=199');
}
$user_id = $_SESSION['user_id'];
use LMS\src\models\Book;

require '../autoload.php';

if(isset($_POST['submit'])) {
    $book = new Book();
    $book->create($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD New Book</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <?php require('../sidebar.php') ?>
        </aside>
        <main>
            <h1>ADD New Book</h1>
            <form action="" method="post">
                <label for="id">ID</label>
                <input  type="text" placeholder="Enter Id of Book" required name="id" id="id" >
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
                <label for="edition">Edition Name</label>
                <input type="text" name="edition" id="edition">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" >
                <label for="publication">Pyblication</label>
                <input type="text" name="publication" id="publication" >
                <label for="isbn10">isbn10</label>
                <input type="text" name="isbn10" id="1sbn10" >
                <label for="isbn13">isbn13</label>
                <input type="text" name="isbn13" id="isbn13" >
                <label for="pages">Pages</label>
                <input type="text" name="pages" id="pages" >
                <label for="price">Price</label>
                <input type="text" name="price" id="price" >

                <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>