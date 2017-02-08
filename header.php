<?php
/**
 * Шаблон шапки (header.php)
 */
	$theme_options = get_option('option_name');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<div class="wrap">
		<header>
			<div class="container">
			<?php if($theme_options['kdv_informer'] == 1){ ?>
				<!-- Gismeteo informer START -->
					<link rel="stylesheet" type="text/css" href="https://nst1.gismeteo.ru/assets/flat-ui/legacy/css/informer.min.css">
					<div id="gsInformerID-LU2r5h6JvuHHPR" class="gsInformer" style="width:210px;height:201px;position: fixed;top:100px;left: -155px;background-color: rgba(255, 255, 255, 0.76);">
    					<div class="gsIContent">
        					<div id="cityLink">
            					<a href="https://www.gismeteo.ru/weather-maykop-5218/" target="_blank">Погода в Майкопе</a>
        					</div>
        					<div class="gsLinks">
            					<table>
            						<tr>
                						<td>
                    						<div class="leftCol">
                        						<a href="https://www.gismeteo.ru/" target="_blank">
                            						<img alt="Gismeteo" title="Gismeteo" src="https://nst1.gismeteo.ru/assets/flat-ui/img/logo-mini2.png" align="middle" border="0" />
                            						<span>Gismeteo</span>
                        						</a>
                    						</div>
                    						<div class="rightCol">
                        						<a href="https://www.gismeteo.ru/weather-maykop-5218/2-weeks/" target="_blank">Прогноз на 2 недели</a>
                    						</div>
                						</td>
            						</tr>
            					</table>
        					</div>
    					</div>
					</div>
					<script async src="https://www.gismeteo.ru/api/informer/getinformer/?hash=LU2r5h6JvuHHPR" type="text/javascript"></script>
				<!-- Gismeteo informer END -->
				<?php } ?>
			</div>
		</div>
		
		<div class="left">
			<div class="logo">
				<a href="/"><img src="img/logo1.png"></a>
				<span>С нами<br>комфортно!</span>
			</div>
			<div class="buttons">
				<a href="zabronirovat-nomer" target='_blank' class="b1">Забронировать номер</a>
				<a href="zadat-vopros" target='_blank' class="b2">Задать вопрос</a>
			</div>
		</div>
		<div class="right">
			<div class="adress">
				Краснодарский край, Туапсинский район,<br>пос. Небуг, ул. Набережная, д. 7-Г
			</div>
			<div class="phone">
				+7 (918) 088-00-05
			</div>
			<div class="mail">
				<a href="mailto:oksana-nebug@mail.ru">oksana-nebug@mail.ru</a>
			</div>
		</div>
		<div class="main-logo">
			<a href="/"><img src="img/main-logo.png"></a>
		</div>
		<div class="clear"></div>
	</div>
</header>
		<main>

<nav class="top-menu" id="topnav">
							<?php $args = array( 
								'theme_location' => 'top',
								'container'=> false,
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
</nav>

<div class="slider">
	<div class="slider-container">
		<ul class="bxslider">
			<li><img src="assets/images/slider/000111_cr.jpg"></li><li><img src="assets/images/slider/0002_cr.jpg"></li><li><img src="assets/images/slider/0003_cr.jpg"></li><li><img src="assets/images/slider/0004_cr.jpg"></li><li><img src="assets/images/slider/0005_cr.jpg"></li><li><img src="assets/images/slider/0006_cr.jpg"></li><li><img src="assets/images/slider/0007_cr.jpg"></li><li><img src="assets/images/slider/0008_cr.jpg"></li><li><img src="assets/images/slider/0009_cr.jpg"></li><li><img src="assets/images/slider/00091_cr.jpg"></li><li><img src="assets/images/slider/2s.jpg"></li><li><img src="assets/images/slider/3s.jpg"></li><li><img src="assets/images/slider/4s.jpg"></li><li><img src="assets/images/slider/5s.jpg"></li><li><img src="assets/images/slider/1s.jpg"></li><li><img src="assets/images/slider/12_cr.jpg"></li><li><img src="assets/images/slider/13_cr.jpg"></li><li><img src="assets/images/slider/14_cr.jpg"></li><li><img src="assets/images/slider/15_cr.jpg"></li><li><img src="assets/images/slider/16_cr.jpg"></li>
		</ul>
	</div>
</div>


