<?php

use LMS\models\Library;

require '../autoload.php';

$library_id = $_GET['library_id'];
$libraryob = new Library();
$libraryob->delete($library_id);
header("location:library_profile.php");