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
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal0-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal0.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal1-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal1.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal2-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal2.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal3-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal3.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal4-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal4.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal5-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal5.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal6-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal6.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal7-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal7.jpg">
					</a>
				</div>
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal8-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal8.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal9-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal9.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal10-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal10.jpg">
					</a>
				</div>				
				<div class="slide">
					<a href="<?php bloginfo( 'template_url' ); ?>/galery/gal11-b.jpg" rel="fancy" class="fancy">
						<img src="<?php bloginfo( 'template_url' ); ?>/galery/gal11.jpg">
					</a>
				</div>				
			</div>
		</div>
	</div>
</main>
<?php get_footer(); // подключаем footer.php ?>