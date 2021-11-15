<?php

    $dsn = 'mysql:host=localhost;dbname=futureseekers';
    $username = 'root';
    $password = null;

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
    }
    catch (PDOException $e){
        
        die("An error has occurred");
    }

    $result = $pdo->prepare("SELECT * FROM `registrations`");
    $result -> execute();

?>