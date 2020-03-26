<?php
    $dsn = 'mysql:host=sulnwdk5uwjw1r2k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=gdpkkqefzvny7u2f';
    $username = 'ee7c2fhhpqhv38xe';
    $password = 'a4ji80ppm9ukmalp';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
