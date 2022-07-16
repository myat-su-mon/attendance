<?php
    // development : local server
    // $host = 'localhost';
    // $db = 'attendance';
    // $user = 'root';
    // $pass = 'root';
    // $charset = 'utf8mb4';

    // $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    // production: remote server
    $host = 'sql6.freesqldatabase.com';
    $db = 'sql6506614';
    $user = 'sql6506614';
    $pass = '6atJSxCljD';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin", "admin");
?>