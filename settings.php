<?php

/**
 * Настройки темы
 */

add_action('admin_menu', 'add_plugin_page');
function add_plugin_page(){
	add_theme_page( 'Настройки темы', 'Настройки темы', 'edit_theme_options', 'theme-opttions', 'primer_options_page_output' );
}

function primer_options_page_output(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>

		<form action="options.php" method="POST">
			<?php
				settings_fields( 'option_group' );     // скрытые защитные поля
				do_settings_sections( 'primer_page' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
				submit_button();
			?>
		</form>
	</div>
	<?php
}

/**
 * Регистрируем настройки.
 * Настройки будут храниться в массиве, а не одна настройка = одна опция.
 */
add_action('admin_init', 'plugin_settings');
function plugin_settings(){
	// параметры: $option_group, $option_name, $sanitize_callback
	register_setting( 'option_group', 'option_name', 'sanitize_callback' );

	// параметры: $id, $title, $callback, $page
	add_settings_section( 'section_id', 'Основные настройки', '', 'primer_page' ); 

	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('primer_field1', 'Название опции', 'fill_primer_field1', 'primer_page', 'section_id' );
	add_settings_field('kdv_informer', 'Включить информер погоды?', 'fill_option_informer', 'primer_page', 'section_id' );
}

## Заполняем опцию 1
function fill_primer_field1(){
	$val = get_option('option_name');
	$val = $val['input'];
	?>
	<input type="text" name="option_name[input]" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

## Опция отображения иформера погоды
function fill_option_informer(){
	$val = get_option('option_name');
	$val = $val['kdv_informer'];
	?>
	<label><input type="checkbox" name="option_name[kdv_informer]" value="1" <?php checked( 1, $val ) ?> /> Да</label>
	<?php
}

## Очистка данных
function sanitize_callback( $options ){ 
	// очищаем
	foreach( $options as $name => & $val ){
		if( $name == 'input' )
			$val = strip_tags( $val );

		if( $name == 'kdv_informer' )
			$val = intval( $val );
	}

	//die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

	return $options;
}