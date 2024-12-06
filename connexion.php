<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=mini-projet", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie<br/>";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

?>