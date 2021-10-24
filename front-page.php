<?php get_header(); ?> 
<!-- header.phpを読み込む -->
<!--------------------------
トップページのファーストビュー
---------------------------->
<div class="top-img">
	<img src="<?php bloginfo('template_url'); ?>/img/top1.png" alt="">
	<div id="top-text" class="top-text">どこにいても、<span class="br__sp">生まれても、</span> <span class="br__pc">世界最高の教育を受けられる。</span> </div>
</div>

<!--------------------------
Aboutブロック
---------------------------->
<div id="about" class="about content__items">
	<!--コンテンツのインナー-->
	<div class="content__inner">
		<!--コンテンツのタイトルエリア-->
		<div class="content__header">
			<div class="content__header__inner">
				<!--コンテンツのタイトル名-->
				About
				<!--下線-->
				<div class="content__header__border"></div>
			</div>
		</div>
		<!--コンテンツの内容-->
            <div class="about__content">
            <div class="about__img">
                  <img src="<?php bloginfo('template_url'); ?>/img/about.png" alt="">
            </div>
            <div class="about__text">
                  <div class="about__text__title">
                        プログラミングスクール<br>
                        テックアイエス
                  </div>
                  <div class="about__text__dis">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                  </div>
            </div>
      </div>
 
      <!--------------------------
      Serviceブロック
      ---------------------------->
      <div id="service" class="service content__items">
            <!--コンテンツのインナー-->
            <div class="content__inner">
                  <!--コンテンツのタイトルエリア-->
                  <div class="content__header">
                        <div class="content__header__inner">
                              <!--コンテンツのタイトル名-->
                              Service
                              <!--下線-->
                              <div class="content__header__border"></div>
                        </div>
                  </div>
                  <!--コンテンツの内容-->
                  <div class="service__content">
                        <!--Serviceのカード-->
                        <div class="service__card">
                              <!--カードの画像-->
                              <div class="service__card__img">
                                    <img src="<?php bloginfo('template_url'); ?>/img\service1.png" alt="">
                              </div>
                              <!--カードのタイトル-->
                              <div class="service__card__title">
                                    現役エンジニア講師
                              </div>
                              <!--カードの説明文-->
                              <div class="service__card__dis">
                                    ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                                    ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                                    ここにテキストが入りますここにテキストが入りますここにテキストが入ります

                              </div>
                        </div>
                        <!--Serviceのカード-->
                        <div class="service__card">
                              <!--カードの画像-->
                              <div class="service__card__img">
                                    <img src="<?php bloginfo('template_url'); ?>/img\service2.png" alt="">
                              </div>
                              <!--カードのタイトル-->
                              <div class="service__card__title">
                                    ５分以内の質問対応
                              </div>
                              <!--カードの説明文-->
                              <div class="service__card__dis">
                              ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                              ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                              ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                              </div>
                        </div>
                        <!--Serviceのカード-->
                        <div class="service__card">
                              <!--カードの画像-->
                              <div class="service__card__img">
                                    <img src="<?php bloginfo('template_url'); ?>/img\service3.png" alt="">
                              </div>
                              <!--カードのタイトル-->
                              <div class="service__card__title">
                                    クラス制度・イベント
                              </div>
                              <!--カードの説明文-->
                              <div class="service__card__dis">
                              ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                              ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                              ここにテキストが入りますここにテキストが入りますここにテキストが入ります
                              </div>
                        </div>
                  </div>
 
      <!--------------------------
      Newsブロック
      ---------------------------->
      <div id="news" class="news content__items">
            <!--コンテンツのインナー-->
            <div class="content__inner">
                  <!--コンテンツのタイトルエリア-->
                  <div class="content__header">
                        <div class="content__header__inner">
                              <!--コンテンツのタイトル名-->
                              News
                              <!--下線-->
                              <div class="content__header__border"></div>
                        </div>
                  </div>
                  <!--コンテンツの内容-->
                  <div class="news__content">
                  <!--表示件数を設定-->
                  <?php
                  // 指定したカテゴリーの ID を取得
                  $category_id = get_cat_ID('News');// News記事のみが取得できるように、カテゴリーを指定します。カテゴリ名は「News」とします。
                  // このカテゴリーの URL を取得(ニュース一覧はこちら用のリンク)
                  $category_link = get_category_link($category_id);
                  // 指定した記事のみ取得
                  query_posts([ // 「query_posts」では、記事を取得する条件を指定できます。
                        // 今回はカテゴリの指定&3記事の取得なので、
                        'posts_per_page' => 3, // 取得数
                        'cat' => $category_id, //カテゴリID
                  ]); //という条件下で記事を取得させます。
                  ?>
                  <!-- 記事一覧を取得する際の開始文です。これで<a>タグの内容が、記事の数だけ繰り返されます。 --> 
                  <?php
                  if (have_posts()) : //記事があるか判定
                        while (have_posts()) : //記事一覧を取得するループを開始
                              the_post(); //ループ中、次の記事に進みます,,,これがないと同じ記事がループし続けてしまうので注意
                  ?>
                        <!-- the_permalink()で記事のリンクを取得できます。 -->
                        <a href="<?php the_permalink(); ?>">
                              <!--1記事-->
                              <div class="news__items">
                                    <!--記事の投稿日-->
                                    <div class="news__item news__date">
                                          <!-- 
                                                get_the_date()をechoすることで、投稿日を取得できます。
                                                ()内に、表示させたいフォーマットを指定できます。
                                                例えば、2021年01月30日と表示させたいときは、「Y年m月d日」となります。
                                          -->
                                          <?php echo get_the_date('Y.m.d'); ?>
                                    </div>
                                    <!--記事のタイトル-->
                                    <div class="news__item news__title">
                                          <?php the_title(); ?> <!-- the_titleで記事のタイトルを取得できます。 -->
                                    </div>
                                    <!--デザイン右の矢印-->
                                    <div class="news__item news__anchor">
                                          →
                                    </div>
                              </div>
                        </a>
                  <!-- 
                        「if(have_posts()):」と「while(have_posts()):」の終了コードです。
                        通常のIF文やWhile文だと{}波かっこで囲います
                   -->
                  <?php
                        endwhile;
                  endif;
                  ?>
                  <div class="news__button">
                        News一覧はこちら
                        <a href="<?php echo esc_url($category_link); ?>" class="a__btn"></a>
                  </div>
            </div>
      </div>
 
      <!--------------------------
      Contactブロック
      ---------------------------->
      <div id="contact" class="contact content__items">
            <!--コンテンツのインナー-->
            <div class="content__inner">
                  <!--コンテンツのタイトルエリア-->
                  <div class="content__header">
                        <div class="content__header__inner">
                              <!--コンテンツのタイトル名-->
                              Contact
                              <!--下線-->
                              <div class="content__header__border"></div>
                        </div>
                  </div>
                  <!--コンテンツの内容-->
                  <div class="contact__content">
                        <div class="contact__text">
                              まずはお気軽に<br>
                              無料で体験&カウンセリング
                        </div>
                        <div class="contact__button">
                              申し込みはこちらから
                              <a href="<?php bloginfo('url'); ?>/contact" class="a__btn">
                              </a>
                        </div>
                  </div>
            </div>
      </div>



<?php get_footer(); ?> <!-- footer.phpを読み込む -->
