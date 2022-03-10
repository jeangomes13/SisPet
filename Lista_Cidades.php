<?php
	include_once('Classe_cidade.php');
	include_once('menu_principal.php');
?>
<html>

<head>
	<title>Lista de Cidades</title>
</head>

<body>
	<div>
		<form name="formulario" action="Incluir_Cidade.php" method="post">
			<fieldset style="width:50%; margin:0 auto; margin-top:5%; position:center;">
				<legend><strong><br>Lista de Cidades</strong></legend>

				<button type="submit" class="btn  btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Adicionar Nova Cidade">Cadastrar <span class="badge badge-light">+</span></button>
				<a href="Index.php" class=" btn-outline-dark btn-secondary btn-sm ">Voltar</a><br>
				<br>


				<nav>
					<table class="table table-hover  table-bordered ">
						<!--  -->
						<thead>
							<tr class="table-active">
								<!---->
								<td style="text-align:center; width:3%; ">Código</td>
								<td style="text-align:center; width:12%;">Cidade</td>
								<td style="text-align:center; width:2%;">UF</td>
								<td style="text-align:center; width:8%;">Ações</td>
							<tr>
						</thead>
						<tbody>
							<?php
							$cidade = new cidade();
							$result = 0;
							$lista = $cidade->selectAllCidade(); //vai apresentar a tabela
							while ($registro = $lista->fetch_array()) {
								echo '<tr> ';
								echo '    <td class="table-active" style="text-align:center;">' . $registro["CodigoCidade"] . '</td>';
								echo '    <td style="text-align:center;">'  . $registro["NomeCidade"] . '</td>';
								echo '    <td style="text-align:center;">'  . $registro["SiglaUF"] . '</td>';
								echo '    <td style="text-align:center;">';
								echo '         <a class="btn-outline-info btn-sm" href="Alterar_cidade.php?id=' . $registro["CodigoCidade"] . '">Editar</a>';
								echo '         <a class="btn-outline-info btn-sm"href="javascript:confirmacao(' . $registro["CodigoCidade"] . ') ">Excluir</a>';
								echo '    </td>';
								echo '</tr>';
								$result++;
							}

							echo 'Total de cidades ' . $result;
							?></tbody>
					</table>
				</nav>

			</fieldset>
		</form>
	</div>
</body>

</html>


<script language="Javascript">
	function confirmacao(id) {
		var resposta = confirm("Você confirma a exclusão da cidade " + id + " ?");
		if (resposta == true) {
			window.location.href = "Delete_Cidade.php?id=" + id;
		}
	}
</script>