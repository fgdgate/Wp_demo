
<?php get_header(); ?>
	<div class="index__img">
		<img src="<?php bloginfo('template_url'); ?>/img\Campus.jpg" alt="">
		<div id="index-text" class="index-text">News List</div>
	</div>
	
<!-- 記事ループ -->
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>

		<!-- 記事のリンク -->
		<a href="<?php the_permalink(); ?>">
			<!-- アイキャッチ画像 -->
			<?php the_post_thumbnail('full'); ?>
			<!-- タイトル -->
			<div class="index__title">
				<p>
					<?php the_title(); ?>
				</p>
			</div>
			<!-- 投稿日 -->
			<div class="index__time">
				<time datetime="<?php echo get_the_time('Y-m-d'); ?>">
					<?php echo get_the_date(); ?>
				</time>
			</div>
			<!-- 抜粋 -->
			<div class="index__exc">
				<p>
					<?php the_excerpt(); ?>
				</p>
			</div>
		</a>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>