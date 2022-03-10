<?php
include('Classe_Tipo.php');

$codigoTipoAnismal = $_POST["codigoTipoAnimal"];
$descricaoTipoAnimal = $_POST["descricaoTipoAnimal"];

$tipo = new tipoAnimal();
$tipo->setCodigoTipoAnimal($codigoTipoAnimal);
$tipo->setDescricaoTipoAnimal($descricaoTipoAnimal);
$tipo->updateTipoAnimal();

header("location:lista_tipos.php");
