<?php
	include_once('menu_principal.php');
	include_once('Classe_UF.php');
?>

<html>

	<head>
		<meta charset="UTF-8">
		<title>Cadastro da Cidade</title>
	</head>

	<body>
		<form name="formulario" action="Salvar_Incluir_Cidade.php" method="post">
			<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">
				<legend><strong> Cadastro da Cidade [Inclusão] </strong></legend>
				<br>
				<label>Código</label><br>
				<input type="text" name="codigocidade" size="10" readonly="true" placeholder="[novo]" /><br>
				<label>Nome Cidade</label><br>
				<!--Incluir formaction-->
				<input type="text" name="nomecidade" size="45" maxlength="45" autofocus required/><br>
				<label>UF</label><br>
					<?php
						//Monta a caixa para seleção da UF
						$UF = new UF();
						$lista = $UF->selectAllUf();
						echo "<select name='CodUf'>";
						while ($registro = $lista->fetch_array() ) {
							echo "<option value=".$registro["CodUf"].">".$registro["DescricaoUF"]."</option>";
						}
						echo"</select>";
						echo"<br><br>";
					?>
				
				<button type="submit">Salvar</button>
				<button formaction="Lista_Cidades.php">Voltar</button>
				<!--Incluir formaction-->
			</fieldset>
		</form>
	</body>

</html>