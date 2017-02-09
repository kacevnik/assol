<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
<div id='content' class="container">id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); // заголовок поста ?></h1>
						<?php the_content(); // контент ?>
				
			</div>
			<?php endwhile; // конец цикла ?>
			</div>
			<noindex>
	<style>
		.gallery {
			height: 167px;
			background: url('img/gallery.jpg') no-repeat center;
		}
		.gallery .gallery-container {
			padding: 20px 60px;
			position: relative;
		}
		.gallery .bx-pager {
			display: none;
		}
		.gallery .bx-controls-direction a {
			position: absolute;
			display: block;
			text-indent: -99999px;
			width: 32px;
			height: 32px;
			top: 50%;
			margin-top: -16px;
		}
		.gallery .bx-controls-direction a.bx-prev {
			background: url('img/prev2.png') top;
			left: 18px;
		}
		.gallery .bx-controls-direction a.bx-prev:hover {
			background: url('img/prev2.png') bottom;
		}
		.gallery .bx-controls-direction a.bx-next {
			background: url('img/next2.png') top;
			right: 18px;
		}
		.gallery .bx-controls-direction a.bx-next:hover {
			background: url('img/next2.png') bottom;
		}
	</style>
</noindex>

<div class="container">
	<div class="gallery">
		<div class="gallery-container">
			<div class="slider2">
				<div class="slide">
	<a href="assets/images/karousel/22.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-22.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/b1.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-b1.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/g2.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-g2.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/b2.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-b2.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/v2.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-v2.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/g3.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-g3.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/b3.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-b3.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/g4.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-g4.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/b4.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-b4.d97.jpg">
	</a>
</div><div class="slide">
	<a href="assets/images/karousel/g5.jpg" rel="fancy">
		<img src="assets/cache/images/karousel/193x128-g5.d97.jpg">
	</a>
</div>
			</div>
		</div>
	</div>
</div>
		</main>
		<noindex>
	<style>
		footer {
			height: 120px;
			background: url('img/footer.png');
			font-size: 12px;
			color: #8f8f8f;
		}
		footer a {
			color: #8f8f8f;
		}
		footer .copy {
			float: left;
			padding-top: 20px;
		}
		footer .copy div {
			height: 25px;
		}
		footer .phones {
			float: right;
			padding-top: 20px;
			text-align: right;
		}
		footer .phones .made {
			padding-right: 120px;
			position: relative;
			margin-top: 10px;
			text-align: left;
		}
		footer .phones .made img {
			position: absolute;
			right: 0;
			bottom: 0;
		}
	</style>
</noindex>

<?php get_footer(); // подключаем footer.php ?>