<?php 
    declare(strict_type=1);
    require_once "../config/bancodedados.php";

    function buscarCategoria(){
        global $pdo;
        $stmt =$pdo->query("SELECT * FROM categoria");
        return $stmt->fechALL(PDO::FETCH_ASSOC);
    }

?>