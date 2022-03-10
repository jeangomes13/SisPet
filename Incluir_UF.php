<?php
	include_once('menu_principal.php');
?>

<html>

<head>
	<title>Cadastro da UF</title>
</head>

<body>
	<form name="formulario" action="Salvar_Incluir_UF.php" method="post">
		<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">
			<legend><strong> Cadastro da UF [ Inclusão ] </strong></legend>
			<br>
			<label>Código</label><br>
			<input type="text" name="CodUf" size="10" readonly="true" placeholder="[novo]" /><br>
			<label>UF</label><br>
			<!--Incluir formaction-->
			<input type="text" name="DescricaoUF" required="" size="45" maxlength="45" autofocus /><br><br>
			<input type="submit" value="Salvar" />
			<a href="Lista_UF.php">Voltar</a>
			<!--Incluir formaction-->
		</fieldset>
	</form>
</body>

</html>