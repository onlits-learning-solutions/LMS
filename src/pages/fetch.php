<?php

use LMS\models\Member;
use LMS\src\models\Book;

require '../autoload.php';

if(isset($_GET['type'])) {
    if($_GET['type'] == 'book') {
        $book = Book::details(intval($_GET['id']));
        $book = json_encode($book);
        echo $book;
    } else {
        $member = Member::details($_GET['id']);
        $member = json_encode($member);
        echo $member;
    }
}