<?php
   include('Classe_Raca.php');

   $codigoRacaAnimal = $_POST["codigoRacaAnimal"];
   $descricaoRacaAnimal = $_POST["descricaoRacaAnimal"];

      $raca = new raca();
      $raca -> setCodigoRacaAnimal($codigoRacaAnimal);
      $raca -> setDescricaoRacaAnimal($descricaoRacaAnimal);
      $raca -> updateRacaAnimal();

      header("location:lista_racas.php");
?>


