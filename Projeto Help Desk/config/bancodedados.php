// config/bancodedados.php
<?php

$host = "localhost";
$db = "banco_php";
$usuario = "root";
$senha = "";
$port = "3306";

function getConexao(): PDO {
    global $host, $db, $usuario, $senha, $port;
    try {
        return new PDO("mysql:host=$host;port=$port;dbname=$db", $usuario, $senha, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        error_log("Erro na conexão com o banco de dados: " . $e->getMessage());
        die("Erro ao conectar ao banco de dados.");
    }
}
