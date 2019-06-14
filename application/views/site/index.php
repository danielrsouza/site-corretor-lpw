<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Site</title>
		<!-- Bootstrap core CSS -->
		<link href=<?=base_url('public/css2/bootstrap.min.css')?> rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href=<?=base_url('public/css2/owl.carousel.css')?> rel="stylesheet">
		<link href=<?=base_url('public/css2/css/owl.theme.default.min.css')?>  rel="stylesheet">
		<link href=<?=base_url('public/css2/style.css')?> rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src=<?=base_url('public/js/ie-emulation-modes-warning.js')?>></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in">Seja Bem Vindo!</div>
						<div class="intro-heading">O melhor site de imóveis do litoral.</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
		<span>
			<div class="card-group">
					<?php foreach($card as $car) {?>
						<div class="col-md-4">	
							<div class="card-body">
							<img id="foto-imovel" src=" <?=base_url("public/imgsImoveis/").$car['image']?>"alt="...">
							<h2 class="card-title"><?=$car['nome']?></h2>
							<p class="card-text" style="font-size: 1.4em;"><?=$car['descricao']?></p>
							<p class="card-text" style="font-size: 1.4em;"><?="Valor: "."R$ ".number_format($car['valor'],2,",",".")?></p>
							<p class="card-text" style="font-size: 1.4em;"><?="Dormitórios: ".$car['dormitorios']?></p>
							<p class="card-text" style="font-size: 1.4em;"><?="Sobre: ".$car['descricao']?></p>
							</div>
						</div>
					<?php }?>
					</div>
		</span>
				</div>
			</div>
		</section>

		<footer>
			<div class="row">
				<div class="col-md-9"></div>
				<div class="col-md-3">
						
				</div>
		</footer>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src=<?=base_url('js/bootstrap.min.js')?>></script>
		<script src=<?=base_url('js/owl.carousel.min.js')?>></script>
		<script src=<?=base_url('js/cbpAnimatedHeader.js')?>></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>