<?php
    $frutas = array("morango", "maçã", "abacaxi");

    echo "<p>".$frutas[0]."</p>";

    $frutas[0] ="Laranja";

    $frutas["frutas"] = 15;

    $cores[0] = "azul";
    $cores["cor"] = "Laranja";

    $mapa = [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3
    ];

    var_dump($cores);
    echo"<p></p>";
    print_r($mapa);

    asort($frutas); #ordena pelo valor
    #ksort($frutas); #ordena pela chave

    #foreach($frutas as $valor)
    foreach($frutas as $chave => $valor){
        echo "<p>Na posição $chave temos a fruta: $valor </p>";
    }

    echo "Quantidade de elementos:"

?>