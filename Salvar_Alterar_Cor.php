<?php
include('Classe_Cor.php');

$codigoCor = $_POST["codigoCor"];
$descricaoCor = $_POST["descricaoCor"];

$cor = new cor();
$cor->setCodigoCor($codigoCor);
$cor->setDescricaoCor($descricaoCor);
$cor->updateCor();

header("location:lista_cores.php");
