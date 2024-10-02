<?php get_header(); ?>

	<!-- Область для вывода контента -->
		<div class="content">
		
			<!-- Информация о записи страницы/записи-->
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

				<div class="information-post">
						<h1><?php the_title(); ?></h1>
						<p>Опубликовано: <?php the_time('Y-m-d'); ?>
							/ Просмотров: 
							<?php if (function_exists('the_views')) {
								the_views(); 	
							} ?>
						</p>
				</div>

				<!-- Текст страницы/записи -->
				<div class="text-post">
						<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

		<?php get_footer(); ?>

	</div>

</body>
</html>