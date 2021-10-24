<?php get_header(); ?>
	<div class="index__img">
		<img src="<?php bloginfo('template_url'); ?>/img\Campus.jpg" alt="">
		<div class="index-text">News List</div>
	</div>
	
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			
			<?php the_post_thumbnail('full'); ?>
			
			<div class="index__title">
				<p>
					<?php the_title(); ?>
				</p>
			</div>
			
			<div class="index__time">
				<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
					<?php echo get_the_date(); ?>
				</time>
			</div>
			
			<div class="index__exc">
				<p>
					<?php the_excerpt(); ?>
				</p>
			</div>
		</a>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>