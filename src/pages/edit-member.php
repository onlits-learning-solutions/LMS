<?php

use LMS\models\Member;

require '../autoload.php';


if (isset($_POST['submit'])) {
    $memberob = new Member();
    $member = $memberob->update($_POST);
} else {
    $member = Member::details($_GET['member_id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
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
            <h1>Edit Member</h1>
            <form action="" method="post">
                <label for="member_id">Member Id</label>
                <input type="text" name="member_id" id="member_id" readonly value="<?= $member['member_id'] ?>">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?= $member['name'] ?>">
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender" value="<?= $member['gender'] ?>">
                <label for="date_of_birth">Date of Birth</label>
                <input type="text" name="date_of_birth" id="date_of_birth" value="<?= $member['date_of_birth'] ?>">
                <button name="submit">Submit</button>
            </form>
        </main>
        </div>
</div>

        <footer class="footer">
                <?php require 'footer.php' ?>
            </footer>
    </div>
</body>

</html>