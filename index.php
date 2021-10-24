<?php get_header(); ?>
	<div class="index__img">
		<img src="<?php bloginfo('template_url'); ?>/img\Campus.jpg" alt="">
		<div class="index-text">News List</div>
	</div>
	
<!-- 記事ループ -->
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>