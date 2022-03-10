<?php
    include('Classe_UF.php');

    $codigoUF = $_POST["CodUf"];
    $DescricaoUF = $_POST["DescricaoUF"];

    $UF = new UF();
    $UF->setCodUf($CodUf);
    $UF->setDescricaoUF($DescricaoUF);
    $UF->updateUF();

    header("location:lista_UF.php");

?>
