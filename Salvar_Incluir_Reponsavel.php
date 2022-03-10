<?php
include('Responsavel_class.php');

$dono = $_POST["dono"];

$tipo = new Dono();
$tipo->setDescricaoTipoAnimal($descricaoTipoAnimal);
$tipo->insertTipoAnimal();
header("location:Incluir_Responsavel.php");
?>