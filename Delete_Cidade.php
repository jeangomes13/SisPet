<?php
    include('Classe_Cidade.php');

    $id  = $_REQUEST['id'];
    $cidade = new cidade();
    $cidade->setcodigoCidade($id);
    $cidade->deleteCidade();
    header("location:Lista_Cidades.php");
?>