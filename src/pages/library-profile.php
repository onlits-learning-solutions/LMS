<?php
use LMS\models\Library;
require '../autoload.php';



$librarys =Library::index();


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

            <main>
                <ul class="profile-list">
                    <li class="profile-item">
                        <div class="profile-field">
                            <?php foreach ($librarys as $library) ?>
                            <span class="field-label">Library Name:</span>
                            <span class="field-value">
                                <?= $library['library_name'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">Address:</span>
                            <span class="field-value">
                                <?= $library['address'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">city:</span>
                            <span class="field-value">
                                <?= $library['city'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">state:</span>
                            <span class="field-value">
                                <?= $library['state'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">contact_person:</span>
                            <span class="field-value">
                                <?= $library['contact_person'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">contact_no:</span>
                            <span class="field-value">
                                <?= $library['contact_no'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">Email:</span>
                            <span class="field-value">
                                <?= $library['Email'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">Website:</span>
                            <span class="field-value">
                                <?= $library['Website'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">registration_no:</span>
                            <span class="field-value">
                                <?= $library['registration_no'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">pan_no:</span>
                            <span class="field-value">
                                <?= $library['pan_no'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">GST_no:</span>
                            <span class="field-value">
                                <?= $library['GST_no'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">Bank_name:</span>
                            <span class="field-value">
                                <?= $library['Bank_name'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">Account_no:</span>
                            <span class="field-value">
                                <?= $library['Account_no'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">IFSC_code:</span>
                            <span class="field-value">
                                <?= $library['IFSC_code'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">UPI_ID:</span>
                            <span class="field-value">
                                <?= $library['UPI_ID'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">city:</span>
                            <span class="field-value">
                                <?= $library['city'] ?>
                            </span>
                        </div>
                        <div class="profile-field">
                            <span class="field-label">library_id:</span>
                            <span class="field-value">
                                <?= $library['library_id'] ?>
                            </span>
                        </div>



                        <div class="form-actions">
                            <td><a href="edit-profile.php?library_id=<?= $library['library_id'] ?>">Edit</a></td>

                            <td><a href="delete-member.php?library_id=<?= $library['library_id'] ?>">Delete</a></td>
                        </div>

                        </tr>
                        </tbody>
                    </li>

                </ul>
                </table>
                </form>
        </div>
        </main>

        <footer class="footer">
            <?php require 'footer.php' ?>
        </footer>
    </div>
    </div>


</body>

</html>