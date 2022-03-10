<?php
include_once('menu_principal.php');
include('Classe_Raca.php');

$codigoRacaAnimal = $_GET["id"];

$raca = new raca();

$raca->setCodigoRacaAnimal($codigoRacaAnimal);
$dados = $raca->selectRacaAnimal();
$codigoRacaAnimal = $dados["CodigoRacaAnimal"];
$descricaoRacaAnimal = $dados["DescricaoRacaAnimal"];

echo '<html>';
echo '	<head>';
echo '		<title>Cadastro de Raças de Animais</title>';
echo '  </head>';
echo '	<body>';
echo '		<form name="formulario" action = "Salvar_Alterar_Raca.php" method="post">';
echo '			<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">';
echo '				<legend><strong> Cadastro de Raças de Animais [ Alteração ] </strong></legend>';
echo '				<br>';
echo '				<label>Código</label><br>';
echo '				<input type="text" name="codigoRacaAnimal" size="10" readonly="true" value="' . $codigoRacaAnimal . '"/><br>';
echo '				<label>Raça</label><br>';
echo '				<input type="text" name="descricaoRacaAnimal" size="45" maxlength="45" autofocus value ="' . $descricaoRacaAnimal . '"/><br><br>';
echo '				<input type="submit" value="Salvar"/>';
echo '				<a href="lista_racas.php">Voltar</a>';
echo '			</fieldset>';
echo '		</form>';
echo '	</body>';
echo '</html>';
