<?php
	include('Classe_Tipo.php');

	$id  = $_REQUEST['id'];
	$tipo = new tipoAnimal();
$tipo->setCodigoTipoAnimal($id);
$tipo->deleteTipoAnimal();
	header("location:lista_tipos.php");
