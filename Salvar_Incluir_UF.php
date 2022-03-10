<?php
    include('Classe_UF.php');

    $DescricaoUF = $_POST["DescricaoUF"];

    $UF = new UF();
    $UF->setDescricaoUF($DescricaoUF);
    $UF->insertUF();
    header("location:Incluir_UF.php");
?>