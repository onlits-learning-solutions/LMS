
<?php
use LMS\src\models\user\user;
require 'models\User.php';
require './env.php';


$userob = new user();

if(isset($_POST['submit'])){
    $result = $userob->authenticate($_POST);
    if($result == 1){
        session_start();
        $_SESSION['user_id'] = $_POST['user_id'];

    header('location:pages/book.php');
     } else
    header('location:index.php');
}

if(isset($_GET['status'])) {
    if($_GET['status'] == '99') {
        $error_message = "Invalid user_id or password";
    } elseif ($_GET['status'] == '199') {
        $error_message = "Invalid session! Please login to continue";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grid-2">
          <div class="left-col">
          </div>
          <div class="right-col">
<div id="login-form">
<h1>Library Management Login</h1>
          <form action="" method="post">
            <label for="user_id">User ID</label>
            <input type="text" name="user_id" id="user_id">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button name="submit" id="submit">Submit</button>
            <label for="" style="color:brown">
                <?php
                if(isset($_GET['status']))
                echo $error_message;
                ?>

            </label>
          </form>
</div>
          </div>





    </div>
    
</body>
</html>