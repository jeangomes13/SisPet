<?php
    include('Classe_Cidade.php');

    $codigoCidade = $_POST["codigocidade"];
    $nomeCidade = $_POST["nomecidade"];
    $CodUf = $_POST["CodUf"];
    $cidade = new cidade();
    $cidade->setCodigoCidade($codigoCidade);
    $cidade->setNomeCidade($nomeCidade);
    $cidade->setCodUf($CodUf);
    $cidade->updateCidade();
    header("location:Lista_Cidades.php");
    //echo"<br><br><br><br><br><br>";
    //echo "<a href='Lista_Cidades.php'>voltar</a>";
?>