<?php
include_once('menu_principal.php');
?>

<html>

<head>
	<title>Cadastro de Raças de Animais</title>
</head>

<body>
	<form name="formulario" action="Salvar_Incluir_Dono.php" method="post">
		<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">
			<legend><strong> Cadastro de Donos [ Inclusão ] </strong></legend>
			<br>
			<label>Código do Responsável</label><br>
			<input type="text" name="CodigoResponsavel" size="10" readonly="true" placeholder="[novo]" /><br>
			<label>Nome</label><br>
			<!--Incluir formaction-->
			<input type="text" name="NomeResponsavel" size="45" maxlength="45" autofocus /><br><br>
            <!--Incluir formaction-->
            <label>Endereço</label><br>
            <input type="text" name="EnderecoResponsavel" size="45" maxlength="45" autofocus /><br><br>
            <label>Cidade</label><br>
            <input type="text" name="Cidade_CodigoCidade" size="45" maxlength="45" autofocus /><br><br>
            <label>Cep</label><br>
            <input type="text" name="CepResponsavel" size="45" maxlength="45" autofocus /><br><br>
            <label>Telefone Residencial</label><br>
            <input type="text" name="FoneResidencialReponsavel" size="45" maxlength="45" autofocus /><br><br>
            <label>Telefone Celular</label><br>
            <input type="text" name="FoneCelularResponsavel" size="45" maxlength="45" autofocus /><br><br>
            <label>Telefone pra contato</label><br>
            <input type="text" name="FoneRecadoResponsavel" size="45" maxlength="45" autofocus /><br><br>
			<input type="submit" value="Salvar" />
			<a href="lista_racas.php">Voltar</a>
			
		</fieldset>
	</form>
</body>

</html>