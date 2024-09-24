<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaII</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $capital = (float) $_POST['capital'];
                $taxa = (float) $_POST['taxa'];
                $periodo = (float) $_POST['periodo'];     
                $jcomposto = ($capital * (1 + $taxa) ^ $período) ;

                echo "<p> O Juros composto é de: $jcomposto</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    
    ?>
</body>
</html>