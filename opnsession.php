<?php
    session_start();
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    include 'models/database.php';
    include 'models/post.php';

    header( 'Content-type: text/html; charset=utf8' );
?>
