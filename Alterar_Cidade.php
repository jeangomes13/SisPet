<?php
	include('Classe_Cidade.php');
	include('Classe_UF.php');
	include('menu_principal.php');
	
		$codigoCidade = $_GET["id"];
		$cidade = new cidade();
		$cidade->setCodigoCidade($codigoCidade);

		$dados = $cidade->selectCidade();
		$codigocidade = $dados["CodigoCidade"];
		$nomeCidade = $dados["NomeCidade"];
		
		echo '<html>';
		echo '	<head>';
		echo '		<title>Cadastro de Cidades</title>';
		echo '  </head>';
		echo '	<body>';
		echo '		<form name="formulario" action = "Salvar_Alterar_Cidade.php" method="post">';
		echo '			<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">';
		echo '				<legend><strong> Cadastro da Cidade [ Alteração ] </strong></legend>';
		echo '				<br>';
		echo '				<label>Código</label><br>';
		echo '				<input type="text" name="codigocidade" size="10" readonly="true" value="'.$codigoCidade.'"/><br>';
		echo '				<label>Nome Cidade</label><br>';
		echo '				<input type="text" name="nomecidade" size="45" maxlength="45" autofocus value ="'.$nomeCidade.'"/><br><br>';
		echo '				<label>UF</label><br>';
							//Monta a caixa para seleção da UF
							$UF = new UF();
							$lista = $UF->selectAllUf();
							echo "<select name='CodUf'>";
							while ($registro = $lista->fetch_array() ) {
								echo "<option value=".$registro["CodUf"].">".$registro["DescricaoUF"]."</option>";
							}
							echo"</select>";
							echo"<br><br>";
		echo '				<input type="submit" value="Salvar"/>';
		echo '				<a href="Lista_Cidades.php">Voltar</a>';
		echo '			</fieldset>';
		echo '		</form>';
		echo '	</body>';
		echo '</html>';
?>