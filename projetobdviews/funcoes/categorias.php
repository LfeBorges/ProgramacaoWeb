<?php 
    declare(strict_types=1);
    require_once "../config/bancodedados.php";

    function buscarCategoria(){
        global $pdo;
        $stmt =$pdo->query("SELECT * FROM categoria");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

?>