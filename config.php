<?php
$host = '127.0.0.1';
$db   = 'Eventeen';
$user = 'root';
$pass = ''; // senha vazia por padrão no devcontainer

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o MySQL realizada com sucesso pelo time!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
