<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../config/bancodedados.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pdo = getConexao();
    $stmt = $pdo->prepare("DELETE FROM tipos_chamados WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: tipos_chamados.php"); 
    exit();
}
?>
