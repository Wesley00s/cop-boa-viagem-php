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

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="./css/style-contato.css">
	<link rel="stylesheet" href="../navbar/navbar.css">
	<link rel="stylesheet" href="../footer/footer.css">
	<title>CONTATO</title>
</head>

<body>
	<nav style="background-color: #11006A;" class=" container-fluid navbar navbar-expand-lg" data-bs-theme="dark">
		<div class="container-fluid novo-wdt">
			<a class="navbar-brand espacoNav" href="../index.php">
				<img src="../img/logoCop.png" alt="logo" width="75" height="30"
					class="container-fluid d-inline-block align-text-top imag">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav menus">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="../index.php" target="_blank">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../pagina-servicos/servicos.php" target="_blank">Serviços</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="../pagina-contato/contato.php" target="_blank">Contato</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../pagina-sobre/sobre.php" target="_blank">Sobre</a>
					</li>
				</ul>
				<div class="medias">

					<a href="https://web.whatsapp.com/send?phone=+558899191253&amp;text=Olá" target="_blank"
						class=" socialIcons">
						<img src="../img/whatsIcon.png" alt="" class="d-inline-block align-text-top zapTam">
					</a>
					<a href="https://instagram.com/cop.boa.viagem?igshid=MzRlODBiNWFlZA==" target="_blank"
						class="socialIcons">
						<img src="../img/instaIcon.png" alt="" class="btn-outline-succes align-text-top">
					</a>
				</div> <!--medias-->
			</div> <!--collapse navbar-collapse-->
		</div> <!--container-fluid novo-wdt-->
	</nav>
	<header>
		<div class="contentHeader" id="topo">
			<h1 class="tituloHeader">
				Contato
			</h1>
		</div>

	</header>

	<hr class="hrContato">

	<section class="ContenteContato">
		<h2 class="contato">
			Entre em contato conosco
		</h2>
		<form action="" class="form">
			<div class="inputName">
				<input type="text" name="nome" id="nome" placeholder="Nome">
			</div>
			<div class="inputEmail">
				<input type="email" name="email" id="email" placeholder="Email">
			</div>
			<div class="inputTel">
				<input type="tel" name="tel" id="tel" placeholder="Telefone">
			</div>
			<div class="inputMensagem">
				<textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem"></textarea>
			</div>
			<div class="botoes">
				<button type="submit" class="btn btn-success btn-lg btn-block bordaButton">Enviar</button>
			</div>
		</form>

	</section>

	<hr class="hrContato">

	<section class="secao2">
		<div class="agradecimento">
			<p>
				Agradecemos por escolher a <strong>Clinica Odontológica Popular</strong>
				para cuidar da sua saúde bucal. Nossa equipe está ansiosa
				para recebê-lo(a) e proporcionar um atendimento de excelência.
				Em breve entraremos em contato para agendar sua consulta.
				Obrigado!
			</p>
		</div>

		<div class="imgPessoa">
			<img src="./img/pessoa.png" alt="" width="20%" class="pessoa">
		</div>

	</section>

	<hr class="hrContato">

	<section class="footer">
		<footer>
			<div class="contentFooter">

				<img src="../img/logo.png" alt="" width="50%" class="imgFooter">

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
					<a href="../pagina-sobre/sobre.php">
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