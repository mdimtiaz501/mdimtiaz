<?php

session_start();

if( isset($_POST['submit']) ){
    if( 'imtiaz' == $_POST['uname'] && 'pass' == $_POST['password'] ){
        $_SESSION['name'] = 'imtiaz';
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if( !isset($_SESSION['name']) ){ ?>
            <form action="" method="POST">
                <input type="text" name="uname">
                <input type="text" name="password">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        }

    ?>



    <?php
        if( isset($_SESSION['name']) ){ ?>
            <h3>Logged in successfully. </h3><a href="23.13.2 logout.php">Logout</a>
        <?php
        }

    ?>


</body>
</html>
