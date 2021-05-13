<?php

session_start();


if( isset($_SESSION['name']) ){
    session_destroy();
    unset( $_SESSION['name'] );
    header( 'Location: 23.13.1 form.php');
}else{
    header( 'Location: 23.13.1 form.php');
}
