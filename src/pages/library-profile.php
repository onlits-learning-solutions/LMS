<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:index?status=199');
}
$user_id = $_SESSION['user_id'];
require '../autoload.php';

use LMS\src\models\library\Library;

$libraryob = new Library();
$librarys = $libraryob->index();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
<div class="grid-container">
     <aside>
     <?php require('../sidebar.php') ?>
 </aside>

 <main class="grid-2">


    <table class='content-table'>
    <thead>
        <tr>
            <th>library_name</th>
            <th>address</th>
            <th>city</th>
            <th>state</th>
            <th>contact_person</th>
            <th>contact_no</th>
            <th>Email</th>
            <th>Website</th>
            <th>registration_no</th>
            <th>pan_no</th>
            <th>GST_no</th>
            <th> Bank_name</th>
            <th>Account_no</th>
            <th>IFSC_code</th>
            <th>UPI_ID </th>
            <th></th>
        </tr>
</thead>
        <?php foreach ($librarys as $library) { ?>
            <tbody>
            <tr>
                <td>
                    <?= $library['library_name'] ?>
                </td>
                <td>
                    <?= $library['address'] ?>
                </td>
                <td>
                    <?= $library['city'] ?>
                </td>
                <td>
                    <?= $library['state'] ?>
                </td>
                <td>
                    <?= $library['contact_person'] ?>
                </td>
                <td>
                    <?= $library['contact_no'] ?>
                </td>
                <td>
                    <?= $library['Email'] ?>
                </td>
                <td>
                    <?= $library['Website'] ?>
                </td>
                <td>
                    <?= $library['registration_no'] ?>
                </td>
                <td>
                    <?= $library['pan_no'] ?>
                </td>
                <td>
                    <?= $library['GST_no'] ?>
                </td>
                <td>
                    <?= $library['Bank_name'] ?>
                </td>
                <td>
                    <?= $library['Account_no'] ?>
                </td>
                <td>
                    <?= $library['IFSC_code'] ?>
                </td>
                <td>
                    <?= $library['UPI_ID'] ?>
                </td>
                

                
            </tr>
        </tbody>
        <?php } ?>
    </table>

 </main>
</div>

</body>

</html>