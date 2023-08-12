<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./normalize/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<link rel="icon" href="./img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./navbar/navbar.css">
	<link rel="stylesheet" href="./footer/footer.css">
	<title>CENTRO ODONTOLÓGICO POPULAR</title>
</head>

<body>
	<nav style="background-color: #11006A;" class=" container-fluid navbar navbar-expand-lg" data-bs-theme="dark">
		<div class="container-fluid novo-wdt">
			<a class="navbar-brand espacoNav" href="../project_site_clinic/index.php">
				<img src="./img/logoCop.png" alt="logo" width="75" height="30"
					class="container-fluid d-inline-block align-text-top imag">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav menus">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="./index.php">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./pagina-servicos/servicos.php" target="_blank">Serviços</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./pagina-contato/contato.php" target="_blank">Contato</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./pagina-sobre/sobre.php" target="_blank">Sobre</a>
					</li>
				</ul>
				<div class="medias">
					<a href="https://web.whatsapp.com/send?phone=+558899191253&amp;text=Olá!" target="_blank"
						class=" socialIcons">
						<img src="./img/whatsIcon.png" alt="" class="d-inline-block align-text-top">
					</a>
					<a href="https://instagram.com/cop.boa.viagem?igshid=MzRlODBiNWFlZA==" target="_blank"
						class="socialIcons">
						<img src="./img/instaIcon.png" alt="" class="btn-outline-succes align-text-top">
					</a>
				</div> <!--medias-->
			</div> <!--collapse navbar-collapse-->
		</div> <!--container-fluid novo-wdt-->
	</nav>
	<main class="main-1">
		<div class="mb-2 text-white topo">
			<div class="secao-topo container-fluid">
				<div class="content_principal container-fluid">
					<h5 id="topo">BEM-VINDO AO</h5>
					<h1>Centro Odontológico Popular</h1>
					<a href="https://maps.app.goo.gl/XDUqPS6CFNdjGYdG8">
						<p class="endereco"><img src="./img/icon-local.png"> R. Antônio Domingues, 412 - Centro, Boa
							Viagem - CE, 63870-000</p>
					</a>
					<a href="./pagina-servicos/servicos.php" target="_blank"><button type="button"
							class="btn btn-success cor_botao">Fazer meu agendamento</button></a>
				</div>
			</div>
		</div>
		<div class="mb-2 container-fluid">
			<div class="contente-page">
				<button class="btn btn-info servico">SERVIÇOS</button>
			</div>
		</div>

		<div class="p-3" style="background-color:  #fff9ff">






			<?php
			$services = [
				["img-card-aparelho.png", "Aparelho"],
				["img-card-limpeza.png", "Limpeza"],
				["img-card-clareamento.png", "Clareamento"],
				["img-card-proteses.png", "Próteses"],
				["img-card-restauracao.png", "Restaração"],
				["img-card-implantes.png", "Implantes"]
			];

			foreach ($services as $service) {
				echo '<div class="col-espaco">';
				echo '<a href="./pagina-servicos/servicos.php">';
				echo '<div class="card-body cb">';
				echo '<img src="./img/' . $service[0] . '" class="card-img-top" alt="service-image">';
				echo '<p class="restaurar">' . $service[1] . '</p>';
				echo '</div></a></div>';
			}
			?>







			<!-- <div class=" col-espaco">
				<a href="./pagina-servicos/servicos.php">
					<div class="card-body cb">
						<img src="./img/img-card-aparelho.png" class="card-img-top" alt="img-card-aparelho">
						<p class="restaurar">Aparelho</p>
					</div>
				</a>
			</div>
			<div class=" col-espaco">
				<a href="./pagina-servicos/servicos.php">
					<div class="card-body cb">
						<img src="./img/img-card-limpeza.png" class="card-img-top" alt="img-card-limpeza">
						<p class="restaurar">Limpeza</p>
					</div>
				</a>
			</div>
			<div class=" col-espaco">
				<a href="./pagina-servicos/servicos.php">
					<div class="card-body cb">
						<img src="./img/img-card-clareamento.png" class="card-img-top" alt="img-card-clareamento">
						<p class="restaurar">Clareamento</p>
					</div>
				</a>
			</div>
			<div class=" col-espaco">
				<a href="./pagina-servicos/servicos.php">
					<div class="card-body cb">
						<img src="./img/img-card-proteses.png" class="card-img-top" alt="img-card-proteses">
						<p class="restaurar">Protéses</p>
					</div>
				</a>
			</div>
			<div class=" col-espaco">
				<a href="./pagina-servicos/servicos.php">
					<div class="card-body cb">
						<img src="./img/img-card-restauracao.png" class="card-img-top" alt="img-card-restauracao">
						<p class="restaurar">Restauração</p>
					</div>
				</a>
			</div>
			<div class=" col-espaco">
				<a href="./pagina-servicos/servicos.php">
					<div class="card-body cb">
						<img src="./img/img-card-implantes.png" class="card-img-top" alt="img-card-canal">
						<p class="restaurar">Implantes</p>
					</div>
				</a>
			</div> -->
		</div> <!--p-3" style="background-color: #fff-->
	</main>

	<hr>

	<section class="secao-2">
		<div class="mine-secao">
			<h1>Já é nosso paciente?</h1>
			<p>Marque sua manutenção, encontre o melhor dia e horário para você .</p>
			<a href="./pagina-servicos/servicos.php"><button type="button" class="btn btn-success bntManutencao">Marcar
					manuntenção</button></a>
		</div>
		<img src="./img/dra-img.png" alt="" class="dra">
	</section> <!--secao-2-->

	<hr>

	<section class="AeD">
		<div class="tituloAeD">
			<h3>Sorrisos e rostos renovados:</h3>
		</div>
		<div class="container">
			<div class="textoAD">
				<p class="textAntesDepois">
					Alguns dos nossos pacientes que tiveram seus sorrisos e expressões trasformado. O próximo pode ser
					você!
				</p>
			</div>

			<div id="carouselExampleInterval" class="carousel slide carrosselAD" data-bs-ride="carousel">
				<div class="carousel-inner bordaCarrossel">
					<div class="carousel-item active" data-bs-interval="10000">
						<img src="./img/carrossel.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="./img/carrossel2.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="./img/carrossel3.png" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

		</div>
	</section>

	<hr>

	<section class="secao-4">

		<h4 class="tituloSecao">
			Cuide da saúde bucal do seu pequeno
		</h4>
		<img src="./img/img-crianca.png" alt="img-crianca" width="100%">
		<p class="textCrianca">
			Cuidar da saúde bucal das crianças é investir em seu bem-estar e
			garantir um sorriso radiante que iluminará sua vida.
			Através de hábitos de higiene adequados, visitas regulares
			ao dentista e uma alimentação equilibrada.
		</p>
		<button type="button" class="btn btn-success btnEuQuero">Eu quero</button>
	</section>

	<hr>

	<section class="secao-3">

		<h4 class="tituloCarrossel">Fique por dentro</h4>
		<div class="tamanho-secao">

			<div id="carouselExampleCaptions" class="carousel slide">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
						aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
						aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
						aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/img/odontology.png" class="d-block w-100" alt="...">

					</div>
					<div class="carousel-item">
						<img src="/img/health-food.png" class="d-block w-100" alt="...">

					</div>
					<div class="carousel-item">
						<img src="/img/consultory.png" class="d-block w-100" alt="...">

					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

	</section>

	<hr>

	<section class="secao-5">
		<div class="divDr">
			<img src="./img/dr.png" alt="" class="dr">
		</div>
		<div class="contentDr">
			<h3 class="tituloSecao5">Matenha seus cuidados bucais em dia!</h3>
			<p class="textSecao5">
				“Um sorriso saudável é o melhor cartão de visitas - cuide dele com a ajuda do seu dentista.”
			</p>
			<button type="button" class="btn btn-success btnAgendar">Agende sua avaliação conosco</button>
		</div>
	</section>

	<img id="imagem_whats" src="https://www.ellodigital.com.br/images/whatsapp.png"
		onClick="window.open('https://web.whatsapp.com/send?phone=+558899191253&amp;text=Olá!', '_blank');">
	<div class="preloader">
		<div class="preloaderimg"></div>
	</div>

	<hr class="hrInicio">

	<section class="footer">
		<footer>
			<div class="contentFooter">

				<img src="./img/logo.png" alt="" width="50%" class="imgFooter">

				<div class="informations">
					<div class="enderecoFooter">
						<h5 class="tFooter">
							Endereço
						</h5>
						<p>
							R. Antônio Domingues, 412 - Centro, Boa Viagem - CE, 63870-000
						</p>
					</div>

					<div class="contatoFooter">
						<h5 class="tFooter">
							Contato
						</h5>
						<p>
							88988778789
						</p>
						<p>
							meuemail00@gmail.com
						</p>
					</div>
				</div>

				<div class="btns">

					<a href="#topo" class="top">
						<h6>
							Voltar ao topo
						</h6>
					</a>
					<a href="./pagina-sobre/sobre.php">
						<h6 class="sobre">
							Sobre nós
						</h6>
					</a>
				</div>
			</div>
			<div class="copy">
				<small class="container-fluid">
					&copy; Copyright 2023, Clínica Odontológica Popular. Developed by, @Wesley R.S</small>
			</div>
		</footer>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
</body>

</html>