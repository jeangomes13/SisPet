<?php
    echo"salvo";
    include('Classe_Cidade.php');

    $nomecidade = $_POST["nomecidade"];
    $codUf = $_POST["CodUf"];

    $cidade = new cidade();
    $cidade ->setNomeCidade($nomecidade);
    $cidade ->setCodUf($codUf);
    $cidade->insertCidade();
    header("location:Incluir_Cidade.php");

?>