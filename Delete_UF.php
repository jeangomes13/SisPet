<?php
include('Classe_UF.php');

$id  = $_REQUEST['id'];
$UF = new UF();
$UF->setCodUf($id);
$UF->deleteUF();
header("location:lista_UF.php");
?>