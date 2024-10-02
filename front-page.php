<?php get_header(); ?>
 
    <!-- Область для вывода контента -->
    <div class="content">
        <!-- Вид записи -->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="box-post">
                <!-- Миниатюра записи-->
                <div class="thumbnail-post">
                    <?php the_post_thumbnail(); ?>
                </div>
                <!-- Описание записи-->
                <div class="description-post">
                    <h2><a href="">Установка локального web-сервера Xampp</a></h2>
                    <p class="info-post">
                        Категория: 
                        <?php echo get_the_category()[0]->cat_name; ?></p>
                        / Опубликовано:
                        <?php the_time('Y-m-d'); ?>
                        / Просмотров:
                        <?php if (function_exists('the_views')) {
                            the_views();
                        } ?>
                    </p>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="readmore">Читать далее..</a>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- Постраничная навигация-->
        <?php if (function_exists('wp_corenavi')); {
           wp_corenavi(); 
        }  ?>
    </div>
 
    <?php get_sidebar(); ?>
 
    <?php get_footer(); ?>
 
</div>
 
</body>
</html>