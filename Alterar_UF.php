<?php
	include_once('menu_principal.php');
	include('Classe_UF.php');

	$CodUf = $_GET["id"];
	$UF = new UF();
	$UF->setCodUf($CodUf);

	$dados = $UF->selectUF();
	$CodUf = $dados["CodUf"];
	$descricaoUF = $dados["DescricaoUF"];
	
	echo '<html>';
	echo '	<head>';
	echo '		<title>Cadastro da UF</title>';
	echo '  </head>';
	echo '	<body>';
	echo '		<form name="formulario" action = "Salvar_Alterar_UF.php" method="post">';
	echo '			<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">';
	echo '				<legend><strong> Cadastro da UF [ Alteração ] </strong></legend>';
	echo '				<br>';
	echo '				<label>Código</label><br>';
	echo '				<input type="text" name="CodUf" size="10" readonly="true" value="'.$CodUf.'"/><br>';
	echo '				<label>UF</label><br>';
	echo '				<input type="text" name="DescricaoUF" size="45" maxlength="45" autofocus value ="'.$descricaoUF.'"/><br><br>';
	echo '				<input type="submit" value="Salvar"/>';
	echo '				<a href="lista_UF.php">Voltar</a>';
	echo '			</fieldset>';
	echo '		</form>';
	echo '	</body>';
	echo '</html>';
?>