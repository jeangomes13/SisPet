<?php
include_once('Classe_Raca.php');
include_once('menu_principal.php');
?>
<html>

<head>
	<title>Lista de Raças de Animais</title>
</head>

<body>
	<div>
		<form name="formulario" action="Incluir_raca.php" method="post">
			<fieldset style="width:50%; margin:0 auto; margin-top:5%; position:center;">
				<legend><strong><br>
						Lista de Raças de Animais</strong></legend>

				<button type="submit" class="btn  btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Adicionar Nova Raça">Cadastrar <span class="badge badge-light">+</span></button>
				<a href="index.php" class=" btn-outline-dark btn-secondary btn-sm ">Voltar</a><br>
				<br>


				<nav>
					<table class="table table-hover  table-bordered ">
						<!--  -->
						<thead>
							<tr class="table-active">
								<!---->
								<td style="text-align:center; width:3%; ">Código</td>
								<td style="text-align:center; width:12%;">Raça</td>
								<td style="text-align:center; width:8%;">Ações</td>
							<tr>
						</thead>
						<tbody>
							<?php
							$raca = new raca();
							$result = 0;//calcular o total
							$lista = $raca->selectAllRacaAnimal(); //vai apresentar a tabela
							while ($registro = $lista->fetch_array()) {
								echo '<tr> ';
								echo '    <td class="table-active" style="text-align:center;">' . $registro["CodigoRacaAnimal"] . '</td>';
								echo '    <td style="text-align:center;">'  . $registro["DescricaoRacaAnimal"] . '</td>';
								echo '    <td style="text-align:center;">';
								echo '         <a class="btn-outline-info btn-sm" href="alterar_raca.php?id=' . $registro["CodigoRacaAnimal"] . '">Editar</a>';
								echo '         <a class="btn-outline-info btn-sm"href="javascript:confirmacao(' . $registro["CodigoRacaAnimal"] . ') ">Excluir</a>';
								echo '    </td>';
								echo '</tr>';
								$result++;
							}
							echo 'Total de Raças de animais ' . $result;
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
		var resposta = confirm("Você confirma a exclusão da raça " + id + " ?");
		if (resposta == true) {
			window.location.href = "delete_Raca.php?id=" + id;
		}
	}
</script>