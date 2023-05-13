<?php

try {
    $pdo = new PDO("mysql:dbname=todoapp;host=localhost", "root", "azerty");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT username FROM users WHERE username = ?";
    $stmt = $pdo->prepare($query);

    $username = $_POST["inputusername"];
    $stmt->execute([$username]);

    if ($stmt->rowCount() == 0) {
        echo "yes";
    }
    elseif ($stmt->rowCount() > 0) {
        echo "no";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}