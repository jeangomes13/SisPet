<?php
    include('Classe_Cor.php');

    $descricaoCor = $_POST["descricaoCor"];

    $cor = new cor();
    $cor->setDescricaoCor($descricaoCor);
    $cor->insertCor();
    header("location:Incluir_cor.php");
?>