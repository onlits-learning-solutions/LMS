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
                    <label for="member_id">memberId</label>
                    <input type="text" placeholder="Enter Id of member" required name="member_id" id="member_id">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name">
                    <label for="gender">gender</label>
                    <input type="text" name="gender" id="gender">
                    <label for="date_of_birth">date_of_birth</label>
                    <input type="text" name="date_of_birth" id="date_of_birth">

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