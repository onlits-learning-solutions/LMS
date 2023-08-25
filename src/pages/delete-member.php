<?php

use LMS\models\Member;

require '../autoload.php';

$member_id = $_GET['member_id'];
$memberob = new Member();
$memberob->delete($member_id);
header("location:member.php");