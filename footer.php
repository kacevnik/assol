<?php
/**
 * Шаблон подвала (footer.php)
 */
	$theme_options = get_option('option_name');
?>
	<footer>
		<div class="container">
			<div class="copy">
				&copy; <?php echo $theme_options['kdv_copy_footer']; ?> - <?php echo date('Y'); ?>
				<div></div>
				<?php echo $theme_options['kdv_adress_header']; ?>
			</div>
			<div class="phones">
				<?php echo $theme_options['kdv_phone_header']; ?>
				<div class="made">
			</div>
			<div class="clear"></div>
		</div>
	</footer>
	</div>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>