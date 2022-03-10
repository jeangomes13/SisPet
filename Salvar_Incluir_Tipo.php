<?php
    include('Classe_Tipo.php');

    $descricaoTipoAnimal = $_POST["descricaoTipoAnimal"];

    $tipo = new tipoAnimal();
    $tipo->setDescricaoTipoAnimal($descricaoTipoAnimal);
    $tipo->insertTipoAnimal();
    header("location:Incluir_tipo.php");
?>