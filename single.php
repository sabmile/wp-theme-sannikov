<?php get_header(); ?>
 
    <!-- Область для вывода контента -->
    <div class="content">
 
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
 
            <!-- Информация о записи страницы/записи-->
            <div class="information-post">
                <h1><?php the_title(); ?></h1>
                <p>Категория: 
                    <?php $category = get_the_category(); echo $category[0]->cat_name; ?>
                    / Опубликовано: 
                    <?php the_time('Y-m-d'); ?>
                    / Просмотров: 
                    <?php if(function_exists('the_views')) { the_views(); } ?></p>
            </div>
    
            <!-- Текст страницы/записи -->
            <div class="text-post">
                <?php the_content(); ?>
            </div>
 
        <?php endwhile; ?>
        <?php endif; ?>
 
        <!-- Разделительная линия -->
        <div class="devide-line"></div>
 
        <!-- Похожие записи -->
        <div class="related-post">
            <p>Еще записи по теме</p>
            <ul>
                <?php 
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                    $category_ids = array();
                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    $args=array(
                    'category__in' => $category_ids,  //сортировка по тегам (меткам)
                    'post__not_in' => array($post->ID),
                    'showposts'=>3,  //количество выводимых ячеек
                    'orderby'=>rand, // в случайном порядке
                    'caller_get_posts'=>1); //исключаем одинаковые записи
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                    echo '';
                    while ($my_query->have_posts()) {
                    $my_query->the_post();
                ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                    }
                    echo '';
                    }
                    wp_reset_query();
                    }
                ?>
            </ul>
        </div>
 
        <!-- Разделительная линия -->
        <div class="devide-line"></div>
 
        <!-- Форма комментариев -->
        <?php comments_template(); ?>
 
    </div>
 
    <?php get_sidebar(); ?>
 
    <?php get_footer(); ?>
 
	</div>
 
</body>
</html>