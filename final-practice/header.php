<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMURAI整体院</title>
    <meta name="description" content="説明文説明文説明文">
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>

    <div class="menu-bg"></div>
    <div class="menu">
      <div>
      <p>メニュー</p>
        <nav>
          <ul class="flex-center">
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url( 'about' ); ?>">当院について</a></li>
            <li><a href="<?php echo home_url( 'course' ); ?>">コース・料金</a></li>
            <li><a href="<?php echo home_url( 'news' ); ?>">お知らせ</a></li>
            <li><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>">お客様の声</a></li>
            <li><a class="btn" href="<?php echo home_url( 'contact' ); ?>">ご予約・お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>