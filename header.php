<!DOCTYPE html>
<html>
<!-- get_header()で読み込まれるファイル -->
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php wp_head(); ?> <!-- wp_head()では、WordPressに初期設定されているhead情報を取得している -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

</head>

<body>
<header>
	<!--インナー-->
	<div class="header__inner">
		<!--ロゴ画像-->
            <a href="<?php bloginfo('url'); ?>">
		      <img class="header__logo" src="<?php bloginfo('template_url'); ?>/img\logo.png">
            </a>
            <!--ナビ欄-->
		<div id="nav" class="header__nav-group"> <!-- ナビ欄のHTMLをJSで取得できるように、IDを追加 -->
			<!--ナビ-->
			<div class="header__nav-item"><a href="<?php bloginfo('url'); ?>#about">About</a></div>
			<div class="header__nav-item"><a href="<?php bloginfo('url'); ?>#service">Service</a></div>
			<div class="header__nav-item"><a href="<?php bloginfo('url'); ?>#news">News</a></div>
            <div class="header__nav-item header__contact"><i class="fas fa-file-signature"></i>Contact<a class="a__btn" href="<?php bloginfo('url'); ?>/contact"></a></div>
		</div>
		<!--モーダル-->
            <div id="hamburger__modal" class="hamburger__modal"></div>
        <!--ハンバーガーメニューボタン-->
            <div id="hamburger__btn" class="hamburger__btn"><i class="fas fa-bars"></i></div>
        </div>
        
        <script>
            var lastInnerWidth = document.documentElement.clientWidth; //window.innerWidthで現在の画面幅を取得
            var nav = document.getElementById('nav');
            if (lastInnerWidth <= 480) { // 画面幅480px以下の場合
                nav.classList.add('hamburger'); // クラス「hamburger」を追加
            }
            // 横幅が変わったとき実行される関数
            window.addEventListener("resize", function () {
                // 現在と前回の横幅が違う場合だけ実行
                if (lastInnerWidth != document.documentElement.clientWidth) {
                    // 横幅を記録しておく
                    lastInnerWidth = document.documentElement.clientWidth;
                    if (lastInnerWidth <= 480) { // 画面幅480px以下の場合
                        if (!(nav.classList.contains('hamburger'))) { //クラス「hamburger」がない場合
                            nav.classList.add('hamburger'); // クラス「hamburger」を追加
                        }
                    } else { // 画面幅481px以上の場合
                        nav.classList.remove('hamburger'); //クラス「hamburger」を削除
                    }
                }
            });

            //ハンバーガーメニューボタンをクリックしたときに実行される関数
            document.getElementById('hamburger__btn').addEventListener('click', function () {
                //ナビ一覧とモーダルを表示
                nav.style.display = "block";
                document.getElementById('hamburger__modal').style.display = "block";
            });

            //ハンバーガーメニューが表示されてるときに、モーダルがクリックされると実行される関数
            document.getElementById('hamburger__modal').addEventListener('click', function () {
                //ナビ一覧とモーダルを非表示
                nav.style.display = "none";
                document.getElementById('hamburger__modal').style.display = "none";
            });

        </script>
</header>
      <div class="main">