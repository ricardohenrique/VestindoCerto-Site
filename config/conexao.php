<?php
    $username = 'dotco392';
    $password = 'cY8aY6s5t0';
    try {
        $pdo = new PDO('mysql:host=192.185.177.122;dbname=dotco392_vestindocerto;charset=utf8', $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>