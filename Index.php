<?php
include_once('menu_principal.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Cadastro de Animais</title>
	<meta name="viewport" content="width-device-width, install-scale=1.0">
	<meta charset="utf-8">
	<meta name="description" content="Sistema de cadastro de Animais feito em PHP">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
	<!--SLIDE SHOW DAS IMAGENS PRINCIPAIS-->
	<header>
		<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('https://cachorrosincriveis.com.br/wp-content/uploads/2018/11/Como-fazer-o-cachorro-a-parar-de-chorar-a-noite-5-696x464.jpg')">
					<div class="carousel-caption d-none d-md-block ">
						<h2 class="display-4">Seu pet sofre com barulhos?</h2>
						<p class="lead ">Uma boa dica é prepará-lo com antecedência para uma situação potencialmente estressante.Produtos nutracêuticos, com alta concentração de Triptofano podem ser ótimos aliados nessas horas</p>
					</div>
				</div>
				<!-- Slide Two - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1573435567032-ff5982925350?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80')">
					<div class="carousel-caption d-none d-md-block">
						<h2 class="display-4 ">Queda de pelos em felinos: é normal?</h2>
						<p class="lead">Dê atenção ao seu bichano, passe mais tempo com ele, ofereça alimentação e suplementação adequadas, arranhadores e muito carinho! E fique atento ao comportamento dele em casa e, se perceber alguma alteração, consulte sempre um médico veterinário.</p>
					</div>
				</div>
				<!-- Slide Three - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1614633836648-68ddff9f7553?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80')">
					<div class="carousel-caption d-none d-md-block">
						<h2 class="display-4">Alimentos tóxicos para cães e gatos</h2>
						<p class="lead">Você sabe quais alimentos não devem ser oferecidos de forma alguma aos pets? Nós listamos alguns deles:</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</header>

	<!------------------------------------------------------------->
	<!-- CONTINUAÇÃO DA PÁGINA -->
	<!-- CONTINUAÇÃO DA PÁGINA -->
	<!-- CONTINUAÇÃO DA PÁGINA -->
	<div class="container marketing">

		<!-- Três colunas de texto, abaixo do carousel -->
		<div class="row">
			<div class="col-lg-4">
				<img class="rounded-circle" src="img/lovepet.jpg" alt="Generic placeholder image" width="140" height="140">
				<h2>Cuidados com o PET</h2>
				<p>Todo dia é dia de cuidar da sua saúde e do seu pet! Podemos listar muitas outras formas de se manter saudável. Mas cada um deve escolher o que lhe faz bem, físico e mentalmente. Faça uma lista, deixe-a sempre à vista e certifique-se de que sua saúde e da sua família está em primeiro lugar nas prioridades</p>

			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="rounded-circle" src="img/petiscos.jpg" alt="Generic placeholder image" width="140" height="140">
				<h2>Petiscos</h2>
				<p> A quantidade de petiscos e agrados aumentou na quarentena? O excesso de petiscos e o fornecimento de outros alimentos, assim como uma mudança na rotina, podem causar alterações no intestino deles, ocasionando diarreias e desconforto. Por isso devemos proteger a saúde intestinal dos nossos amigos!</p>

			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="rounded-circle" src="img/saudebocal.jpg" alt="Generic placeholder image" width="140" height="140">
				<h2>Saúde oral em cães e gatos</h2>
				<p>Essa prática beneficia não só a saúde, mas também é uma forma de carinho. Um momento de afeto entre você e o seu pet. Uma forma de introduzir essa prática na rotina do seu pet é sempre oferecer um agrado que ele possa associar ao momento da escovação dentária</p>

			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->


		<!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Coelhinhos como Pet <span class="text-muted">Lindos de Morrer!</span></h2>
				<p class="lead">Os coelhos são uma ótima opção para quem ama bichinhos de estimação fofos, mas não tem muito tempo para cuidados ou espaço livre. Eles são pequenininhos e podem ficar em apartamentos sem maiores problemas, além de não serem tão carentes ou difíceis de cuidar. No entanto, existem algumas curiosidades sobre os coelhos que nós nem imaginamos!</p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="https://i.pinimg.com/originals/cd/4a/95/cd4a95e7f498a5260398979fce785d1a.jpg" alt="UMA IMAGEM BEM AQUI">
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7 order-md-2">
				<h2 class="featurette-heading">Não é um porquinho e nem veio da Índia! <span class="text-muted">Curiosidades</span></h2>
				<p class="lead">Acredita-se que eles tenham recebido esse nome devido à suposta confusão feita por navegadores que procuravam o caminho das Índias</p>
			</div>
			<div class="col-md-5 order-md-1">
				<img class="featurette-image img-fluid mx-auto" src="img/porquinho.jpg" alt="UMA IMAGEM BEM AQUI">
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Calopsita <span class="text-muted">Animal de estimação</span></h2>
				<p class="lead">Natural da Austrália, esta é uma ave de tamanho médio, que pode atingir até 30 cm quando adulta. Ela tem boa convivência doméstica e normalmente vive em gaiolas, que precisam ter tamanho suficiente para que possa abrir as asas sem esbarrar na grade.</p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-fluid mx-auto" src="img/cali.jpg" alt="UMA IMAGEM BEM AQUI">
			</div>
		</div>

		<hr class="featurette-divider">

		<!-- /FIM DAS FEATUREZINHAS *-* -->

	</div><!-- /.container -->

	<!-- FOOTER -->
	<footer class="container bg-dark    text-white">
		<p class="float-right text-white"><a href="#">Voltar ao topo</a></p>
		<p>&copy; Companhia DogsCats & Cia., 2021-2022 & Dogs; <a href="#">Privacidade</a> & Dogs; <a href="#">Termos</a></p>
	</footer>
	</main>
</body>

</html>