<?php

use LMS\models\Member;

require '../autoload.php';
$members = Member::index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Member</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <main class="main">
                    <main class="grid-2">
                        <h1>Members</h1>
                        <a href="new-member.php">Add New Member</a>
                        <table class='content-table'>
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <?php foreach ((array) $members as $member) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $member['member_id'] ?>
                                        </td>
                                        <td>
                                            <?= $member['name'] ?>
                                        </td>
                                        <td>
                                            <?= $member['gender'] ?>
                                        </td>
                                        <td>
                                            <?= $member['date_of_birth'] ?>
                                        </td>

                                        <div class='edit'>
                                            <td><a href="edit-member.php?member_id=<?= $member['member_id'] ?>">Edit</a></td>

                                            <td><a href="delete-member.php?member_id=<?= $member['member_id'] ?>">Delete</a></td>
                                        </div>
                                    </tr>
                                </tbody>
                            <?php }
                            ?>
                        </table> 
                    </main>
                
                </div>

            </main>

        </div>
    </div>
<footer class="footer">
                    <?php require 'footer.php' ?>
                </footer>
    </div>
    
</body>

</html>