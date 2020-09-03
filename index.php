<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LaddingPage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="DankiCode,LaddingPage,skills,developer,meu-site">
	<meta name="description" content="this is a project on a course from DankiCode. Is a project to show my skills as a programmer!">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/fontawesome.min.css">
	<link href="<?php echo INCLUDE_PATH; ?>assets/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">
</head>
<body>
	<?php  
		$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'about':
				echo '<target target="about" />';
				break;
			case 'services':
				echo '<target target="services" />';
				break;

		}
	?>

	<header>
		<div class="center">
			<div class="logo left">Logotipo</div>

			<!------------------------
				NAVBAR DESKTOP
			 ------------------------->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>about">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>services">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contact">Contato</a></li>
				</ul>
			</nav>

			<!------------------------
				NAVBAR Mobile
			 ------------------------->
			<nav class="mobile right">
				<div class="button-menu-mobile">
					<i class="fa fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>about">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>services">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contact">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>

	<?php  
		
		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		} else {
			if ($url != 'about' && $url != 'services') {
				include('pages/404.php');
			} else {
				include('pages/home.php');
			}
		}
	
	?>

	
	<!------------------------
		Footer
	------------------------->
	<footer>
		<div class="center">
			<p>Todos os direitos rezervados</p>	
		</div>
	</footer>

	<script defer src="<?php echo INCLUDE_PATH; ?>assets/js/all.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>assets/js/landingPage.js"></script>
	<?php if ($url == 'contact'): ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDka_oGCWSOv1YXLDGIpSWmGWUbw6ANLlM"
  		type="text/javascript"></script>
		<script src="<?php echo INCLUDE_PATH; ?>assets/js/map.js"></script>
	<?php endif; ?>
</body>
</html>