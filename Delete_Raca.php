<?php
	include('Classe_Raca.php');

	$id  = $_REQUEST['id'];
	$raca = new raca();
	$raca->setCodigoRacaAnimal($id);
	$raca->deleteRacaAnimal();
	header("location:lista_racas.php");
	//eu vou setar um valor na variavel, em seguida, vou usar a função pra deletar esta cor
?>