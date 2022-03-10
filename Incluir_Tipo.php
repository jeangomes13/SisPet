<?php
include_once('menu_principal.php');
?>

<html>


<head>
	<title>Cadastro de Tipos de Animais</title>
</head>

<body>
	<form name="formulario" action="Salvar_Incluir_Tipo.php" method="post">
		<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">
			<legend><strong> Cadastro de Tipos de Animais [ Inclusão ] </strong></legend>
			<br>
			<label>Código</label><br>
			<input type="text" name="codigoTipoAnimal" size="10" readonly="true" placeholder="[novo]" /><br>
			<label>Tipo</label><br>
			<!--Incluir formaction-->
			<input type="text" name="descricaoTipoAnimal" required="" size="45" maxlength="45" autofocus /><br><br>
			<input type="submit" value="Salvar" />
			<a href="lista_tipos.php">Voltar</a>
			<!--Incluir formaction-->
		</fieldset>
	</form>
</body>

</html>