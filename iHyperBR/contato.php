<!DOCTYPE html>
<html>
<head>
	<title>Product Runt</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

	<section class="header">
		<div class="center">
			<header>
				<div class="logo"><img src="images/logo.png" /></div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--header-->


	<section class="contact">
		<div class="center">
			<div class="contact-info">
				<h2>A mais importante,<br/>primeira conversa.</h2>
				<br />
				<p><b>Telefone:</b> (11) 94388-4494</p>

			<div class="contact-form">
				<form>
					<input placeholder="Nome" type="text" />
					<input placeholder="E-mail" type="text" />
					<input placeholder="Telefone" type="text" />
					<select>
						<option>Geral</option>
						<option>Suporte</option>
					</select>
					<textarea placeholder="Mensagem"></textarea>
					<br />
					<input type="submit" value="Enviar!">
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</section>


	<footer style="padding:60px 0;">
		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="images/logo-footer.png" />
			</div>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>