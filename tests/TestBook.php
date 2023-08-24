<?php
namespace LMS\Test;
use LMS\src\models\Book;

require '../src/models/Book.php';
require '../src/env.php';
class TestBook
{
    public function testIndex()
    {
        $bookob = new Book();
        $books = $bookob->index();
        print_r($books);
    }
}

$test = new TestBook();
$test->testIndex();