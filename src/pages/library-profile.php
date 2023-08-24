<?php

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
    <title>Profile</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="topnav">
            <?php require 'navbar.php' ?>
        </div>
        <div class="sub-container">
            <aside class="sidenav">
                <?php require 'sidebar.php' ?>
            </aside>
          
                <main >


                    <table class='profile-table'>
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
                                <th>Bank_name</th>
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
                                    <div class='edit'>
                                        <td><a href="edit-profile.php?id=<?= $library['$registration_no'] ?>">Edit</a></td>

                                        <td><a href="delete-profile.php?id=<?= $library['$registration_no'] ?>">Delete</a></td>
                                    </div>

                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>

                </main>
          
            <footer class="footer">
                <?php require 'footer.php' ?>
            </footer>
        </div>
    </div>


</body>

</html>