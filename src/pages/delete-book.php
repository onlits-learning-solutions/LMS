<?php

use LMS\src\models\Book;

require '../autoload.php';

$id = $_GET['id'];
$bookob = new Book();
$bookob->delete($id);
header("location:book.php");