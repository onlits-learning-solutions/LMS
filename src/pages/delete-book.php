<?php

use LMS\src\models\Book;

require '../autoload.php';

$id = $_GET['id'];
Book::delete($id);
header("location:book.php");