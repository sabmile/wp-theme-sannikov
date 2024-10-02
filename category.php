<?php get_header(); ?>
<!-- Область для вывода контента -->
	<div class="content">
	
	<!-- Описание категории -->
	<div class="description-category">
			<h1><?php single_cat_title(); ?></h1>
			<?php echo category_description(); ?>
	</div>

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
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="info-post">Категория: <?php $category = get_the_category(); echo $category[0]->cat_name; ?> / Опубликовано: <?php the_time('Y-m-d'); ?> / Просмотров: <?php if(function_exists('the_views')) { the_views(); } ?></p>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="readmore">Читать далее..</a>
			</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>

	<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?> 

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?> 