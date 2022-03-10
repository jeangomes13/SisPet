<?php 
	include('Classe_Cor.php');
	
	$id  = $_REQUEST['id'];
	$cor = new cor();
	$cor->setCodigoCor($id);
	$cor->deleteCor();
	header("location:lista_cores.php");
?>