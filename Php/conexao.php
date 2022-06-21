<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "CRUD";

    $pdo = new PDO('mysql:host=localhost;dbname=CRUD', $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>