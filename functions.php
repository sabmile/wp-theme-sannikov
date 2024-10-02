<?php

add_filter( 'show_admin_bar', '__return_false');

add_filter( 'use_block_editor_for_post_type', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', 'register_styles' );
function register_styles() {
	wp_enqueue_style( 'reset-style', get_stylesheet_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
}

/**
* Поддержка миниатюр
**/
add_theme_support('post-thumbnails'); //добавляем поддержку миниатюр
set_post_thumbnail_size(130, 130, true); //устанавливаем размер миниатюр, в нашем случае 130х130


/**
* Постраничная навигация
**/
function wp_corenavi() {
	global $wp_query;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 5; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div id="page-navi">';
	if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo $pages . paginate_links($a);
	if ($max > 1) echo '</div>';
}


register_sidebar(array(
	'name' => 'Правая колонка', //Название виджета (отображается в панели управления)
	'id' => 'right-sidebar', //ID виджета (нужен для того, чтобы система знала где и какой виджет выводить)
	'before_widget' => '<div id="widget" class="%2$s">', //Содержимое виджета
	'after_widget' => '</div>', //Конец содержимого виджета.
	'before_title' => '<div id="title-widget"><h6>', //Начало блока с заголовком виджета
	'after_title' => '</h6></div>' //Конец блока с заголовком виджета
));

add_action( 'widgets_init', 'unregister_basic_widgets' );
function unregister_basic_widgets() {
	unregister_widget('WP_Widget_Pages');            // Виджет страниц
	unregister_widget('WP_Widget_Calendar');         // Календарь
	unregister_widget('WP_Widget_Archives');         // Архивы
	unregister_widget('WP_Widget_Links');            // Ссылки
	unregister_widget('WP_Widget_Meta');             // Мета виджет
	unregister_widget('WP_Widget_Search');           // Поиск
	unregister_widget('WP_Widget_Text');             // Текст
	// unregister_widget('WP_Widget_Categories');       // Категории
	unregister_widget('WP_Widget_Recent_Posts');     // Последние записи
	unregister_widget('WP_Widget_Recent_Comments');  // Последние комментарии
	unregister_widget('WP_Widget_RSS');              // RSS
	unregister_widget('WP_Widget_Tag_Cloud');        // Облако меток
	unregister_widget('WP_Nav_Menu_Widget');         // Меню
	unregister_widget('WP_Widget_Media_Audio');      // Audio
	unregister_widget('WP_Widget_Media_Video');      // Video
	unregister_widget('WP_Widget_Media_Gallery');    // Gallery
	unregister_widget('WP_Widget_Media_Image');      // Image
	unregister_widget('WP_Widget_Custom_HTML');      // Произвольный HTML код
	unregister_widget('WP_Widget_Block');            // Блок
}