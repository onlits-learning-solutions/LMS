<?php

use LMS\src\models\Transaction;

require '../autoload.php';

$transaction_id = $_GET['transaction_id'];

transaction::delete($transaction_id);
header("location:transaction.php");