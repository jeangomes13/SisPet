<?php
include('Classe_UF.php');
include('menu_principal.php');
?>
<html>

<head>
	<title>Lista de UF</title>
</head>

<body>
	<div>
		<form name="formulario" action="Incluir_UF.php" method="post">
			<fieldset style="width:50%; margin:0 auto; margin-top:5%; position:center;">
				<legend><strong><br>
						Lista de UF</strong></legend>

				<button type="submit" class="btn  btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Adicionar Nova UF">Cadastrar <span class="badge badge-light">+</span></button>
				<a href="index.php" class=" btn-outline-dark btn-secondary btn-sm ">Voltar</a><br>
				<br>


				<nav>
					<table class="table table-hover  table-bordered ">
						<!--  -->
						<thead>
							<tr class="table-active">
								<!---->
								<td style="text-align:center; width:3%; ">Código</td>
								<td style="text-align:center; width:12%;">Tipo</td>
								<td style="text-align:center; width:8%;">Ações</td>
							<tr>
						</thead>
						<tbody>
							<?php
							$UF = new UF();
							$result = 0;
							$lista = $UF->selectAllUF(); //vai apresentar a tabela
							while ($registro = $lista->fetch_array()) {
								echo '<tr> ';
								echo '    <td class="table-active" style="text-align:center;">' . $registro["CodUf"] . '</td>';
								echo '    <td style="text-align:center;">'  . $registro["DescricaoUF"] . '</td>';
								echo '    <td style="text-align:center;">';
								echo '         <a class="btn-outline-info btn-sm" href="Alterar_UF.php?id=' . $registro["CodUf"] . '">Editar</a>';
								echo '         <a class="btn-outline-info btn-sm"href="javascript:confirmacao(' . $registro["CodUf"] . ') ">Excluir</a>';
								echo '    </td>';
								echo '</tr>';
								$result++;
							}
							echo 'Total de UF ' . $result;
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
		var resposta = confirm("Você confirma a exclusão da UF " + id + " ?");
		if (resposta == true) {
			window.location.href = "Delete_UF.php?id=" + id;
		}
	}
</script>