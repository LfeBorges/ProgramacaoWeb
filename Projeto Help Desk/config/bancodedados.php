<?php
function getConexao() {
    try {
        $host = 'localhost';
        $dbname = 'bancodedados_php';
        $username = 'root'; 
        $password = '';     

        return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
}
?>
