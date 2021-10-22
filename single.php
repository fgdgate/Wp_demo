<!-- 投稿ページと呼ばれるページを表示させるためのファイル
      固定ページのように複数投稿でき、ブログ記事やニュース記事などがこれに当たります -->
<?php get_header(); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
	<!-- 記事ヘッダー -->
	<div class="single__header">
		<!-- アイキャッチ画像 -->
		<?php the_post_thumbnail('full'); ?>
		<!-- タイトル -->
		<div class="single__header__title">
			<?php the_title(); ?>
			<div class="single__header__border"></div>
		</div>
	</div>
	<!-- 本文 -->
	<div id="single__post" class="single__post">
		<?php the_content(); ?>
	</div>
	<!-- カテゴリ -->
	<?php if (has_category()) : ?>
		<span class="cat-data">
			<?php echo get_the_category_list(' '); ?>
		</span>
	<?php endif; ?>
<?php
	endwhile;
endif;
?>
<?php get_footer(); ?>