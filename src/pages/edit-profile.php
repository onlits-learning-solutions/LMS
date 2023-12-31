<?php

use LMS\models\Library;

require '../autoload.php';


if (isset($_POST['submit'])) {
    $libraryob = new Library();
    $library = $libraryob->update($_POST);
} else {
    $libraryob = new Library();
    $library = $libraryob->details($_GET['library_id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
            <main class="main">
                <main>
                    <h1>Edit Profile</h1>
                    <form action="" method="post">
                        <label for="library_name">Library Name</label>
                        <input type="text" name="library_name" id="library_name" readonly value="<?= $library['library_name'] ?>">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="<?= $library['address'] ?>">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" value="<?= $library['city'] ?>">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" value="<?= $library['state'] ?>">
                        <label for="contact_person">Contact Person</label>
                        <input type="text" name="contact_person" id="contact_person" value="<?= $library['contact_person'] ?>">
                        <label for="contact_no">Contact No</label>
                        <input type="text" name="contact_no" id="contact_no" value="<?= $library['contact_no'] ?>">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" id="Email" value="<?= $library['Email'] ?>">
                        <label for="Website">Website</label>
                        <input type="text" name="Website" id="Website" value="<?= $library['Website'] ?>">
                        <label for="registration_no">Registration No</label>
                        <input type="text" name="registration_no" id="registration_no" value="<?= $library['registration_no'] ?>">
                        <label for="pan_no">Pan No</label>
                        <input type="text" name="pan_no" id="pan_no" value="<?= $library['pan_no'] ?>">
                        <label for="GST_no">GST No</label>
                        <input type="text" name="GST_no" id="GST_no" value="<?= $library['GST_no'] ?>">
                        <label for="Bank_name">Bank Name</label>
                        <input type="text" name="Bank_name" id="Bank_name" value="<?= $library['Bank_name'] ?>">
                        <label for="Account_no">Account_no No</label>
                        <input type="text" name="Account_no" id="Account_no" value="<?= $library['Account_no'] ?>">
                        <label for="IFSC_code">IFSC_code</label>
                        <input type="text" name="IFSC_code" id="IFSC_code" value="<?= $library['IFSC_code'] ?>">
                        <label for="UPI_ID">UPI_ID No</label>
                        <input type="text" name="UPI_ID" id="UPI_ID" value="<?= $library['UPI_ID'] ?>">
                        <label for="library_id">library_id</label>
                        <input type="text" name="library_id" id="library_id" value="<?= $library['library_id'] ?>">
                        <button name="submit">Submit</button>
                    </form>
                </main>
            </main>
            <footer class="footer">
                <?php require 'footer.php' ?>
            </footer>
        </div>
    </div>


</body>

</html>