<?php
   include('Classe_Raca.php');

   $descricaoRacaAnimal = $_POST["descricaoRacaAnimal"];
   $raca = new raca(null,$descricaoRacaAnimal);
   $raca ->insertRacaAnimal();
   header("location:Incluir_Raca.php");
?>


