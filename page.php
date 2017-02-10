<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<div id='content' class="container <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); // заголовок поста ?></h1>
						<?php the_content(); // контент ?>				
		</div>
<?php endwhile; // конец цикла ?>
	</div>

<div class="container">
	<div class="gallery">
		<div class="gallery-container">
			<div class="slider2">
				<div class="slide">
	<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal_big1.png" rel="fancy" class="fancy">
		<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal1.png">
	</a>
</div><div class="slide">
	<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal_big2.png"  rel="fancy" class="fancy">
		<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal2.png">
	</a>
</div><div class="slide">
	<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal_big3.png" rel="fancy" class="fancy">
		<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal3.png">
	</a>
</div><div class="slide">
	<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal_big4.png" rel="fancy" class="fancy">
		<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal4.png">
	</a>
</div>
<div class="slide">
	<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal_big5.png" rel="fancy" class="fancy">
		<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal5.png">
	</a>
			</div> 
		</div>
	</div>
</div>
</main>
<?php get_footer(); // подключаем footer.php ?>