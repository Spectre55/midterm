<?php
    $dsn = 'mysql:host=localhost;dbname=olympics';
    $username = 'siteuser';
    $password = 'mypass';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
       /*  include('../errors/database_error.php'); */
        exit();
    }
?>