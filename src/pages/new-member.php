<?php

use LMS\models\Member;

require '../autoload.php';

if (isset($_POST['submit'])) {
    $member = new Member($_POST);
    $member->save();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD New Book</title>
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
            <main>
                <h1>ADD New Book</h1>
                <form action="" method="post">
                    <label for="member_id">Member Id</label>
                    <input type="text" placeholder="Enter Id of member" required name="member_id" id="member_id">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name of member">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender" placeholder="Enter Gender of member 'M/F'">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="text" name="date_of_birth" id="date_of_birth" placeholder="Enter DOB of member '2000-06-01'">

                    <button name="submit">Submit</button>
                </form>
            </main>
        </div>
    </div>

    </div>
    </div>
    <footer class="footer">
        <?php require 'footer.php' ?>
    </footer>
</body>

</html>