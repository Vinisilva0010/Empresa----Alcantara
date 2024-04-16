<!DOCTYPE html>
<html>
<head>
	<title>Alcantara</title>
	<meta charset="utf-8">
	<link rel="icon" href="https://cursos.dankicode.com/app/Views/public/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="./style.css" rel="stylesheet">
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo">
					<h3>Alcantara </h3>
				 </div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
			<div class="clear"></div>
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2>Seja bem vindo a nossa empresa</h2>
				<p>Somos uma empresa inovadora e totalmente online, especializada em conectar empresas que necessitam de serviços de transporte logístico com empresas de transporte de carga confiáveis.</p>
				<a target="_blank" href="">cadastre-se</a>
			</div><!--w50-->
			<div class="w50 time-imagem">
				<img src="" />
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->
	<div class="circle"><i class="fas fa-angle-down"></i></div>

	<section class="clientes-slider">

		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
			<img src="" />
		</div>
		</div><!--center-->
	</section>


	<section class="diferenciais">
			
			<div class="center">
				<h2>SOBRE A EMPRESA</h2>

				<div class="icons-diferenciais">

					<div class="box-single-diferenciais">
						<img src="" />
						<h3>?</h3>
						<p>?.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icon2.png" />
						<h3>?</h3>
						<p>?</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icon3.png" />
						<h3>?</h3>
						<p>?</p>
					</div><!--box-single-diferenciais-->

				</div><!--icons-diferenciais-->

			</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2>CRIAR TEXTO ,<br/>CRIAR TEXTO.</h2>
				<p>CRIAR TEXTO
				<br /><br/>
				CRAIR TEXTO.</p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src="images/time.png" />
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="depoimentos">
		<div class="center">
			<h2>CRIAR TEXTO</h2>
			<div class="depoimentos-box">
				<div class="depoimento-single">
					<p>CRIAR TEXTO</p>
					<img src="" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>CRIAR TEXTO</p>
					<img src="" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>CRIAR TEXTO</p>
					<img src="" />
				</div><!--depoimento-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>


	<footer>
	<section class="metodologia">
		<div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>!<br />Entre em contato por e-mail ou telefone.</p>
			<a href="/contato">Entrar Contato</a>
		</div>
	</section>
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
				<img src="" />
			</div>
		</div>
	</footer>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});

	$('section.depoimentos .depoimentos-box').slick({
		dots: true,
		arrows:false,
	    infinite: true,
	    speed:1000,
	    slidesToShow: 1,
	    centerMode:false
	});
</script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>
</body>
</html>