<?php
include_once('menu_principal.php');
include_once('Classe_Tipo.php');

$codigoTipoAnimal = $_GET["id"];

$tipo = new tipoAnimal();
$tipo->setCodigoTipoAnimal($codigoTipoAnimal);

$dados = $tipo->selectTipoAnimal();
$codigoTipoAnimal = $dados["CodigoTipoAnimal"];
$descricaoTipoAnimal = $dados["DescricaoTipoAnimal"];

echo '<html>';
echo '	<head>';
echo '		<title>Cadastro de Tipos de Animais</title>';
echo '  </head>';
echo '	<body>';
echo '		<form name="formulario" action = "Salvar_Alterar_Tipo.php" method="post">';
echo '			<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">';
echo '				<legend><strong> Cadastro de Tipos de Animais [ Alteração ] </strong></legend>';
echo '				<br>';
echo '				<label>Código</label><br>';
echo '				<input type="text" name="codigoTipoAnimal" size="10" readonly="true" value="' . $codigoTipoAnimal . '"/><br>';
echo '				<label>Tipo</label><br>';
echo '				<input type="text" name="descricaoTipoAnimal" size="45" maxlength="45" autofocus value ="' . $descricaoTipoAnimal . '"/><br><br>';
echo '				<input type="submit" value="Salvar"/>';
echo '				<a href="lista_tipos.php">Voltar</a>';
echo '			</fieldset>';
echo '		</form>';
echo '	</body>';
echo '</html>';
