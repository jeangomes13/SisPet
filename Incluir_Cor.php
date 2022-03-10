<?php
include_once('menu_principal.php');
?>

<html>

<head>
	<title>Cadastro de Cores de Animais</title>
</head>

<body>
	<form name="formulario" action="Salvar_Incluir_Cor.php" method="post">
		<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">
			<legend><strong> Cadastro de Cores de Animais [ Inclusão ] </strong></legend>
			<br>
			<label>Código</label><br>
			<input type="text" name="codigoCor" size="10" readonly="true" placeholder="[novo]" /><br>
			<label>Cor</label><br>
			<!--Incluir formaction-->
			<input type="text" name="descricaoCor" required="" size="45" maxlength="45" autofocus /><br><br>
			<input type="submit" value="Salvar" />
			<a href="lista_cores.php">Voltar</a>
			<!--Incluir formaction-->
		</fieldset>
	</form>
</body>

</html>