<?php get_header(); ?>

    <header class="flex-center">
      <h1>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="SAMURAI整体院のロゴ">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sp-logo.png" alt="SAMURAI整体院のロゴ">
      </h1>
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
      <div class="hamburger">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hamburger-btn.svg" alt="ハンバーガーメニュー">
      </div>
    </header>

    <div class="mainvisual">
      <p class="page-title">Contact<span><?php the_title(); ?></span></p>
      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/contact/Reserve.jpg" alt="文字を書いている手元">
      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/contact/SP-Reserve.jpg" alt="文字を書いている手元">
    </div>

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
    </div>

    <main class="contact-form">
      <h2>お電話でのご予約・お問い合わせ</h2>
      <p>
        〒101-0022 東京都千代田区神田練塀町300番地<br>
        住友不動産秋葉原駅前ビル 5F
      </p>
      <p class="contact-tel">
        tel: <span>03-1234-5678</span>
      </p>

      <h2>ご予約・お問い合わせフォーム</h2>
      <p>※ 2営業日以内にご返信いたします。</p>

      <div class="form-container">
      <?php the_content(); ?>
      </div>
    </main>

    <?php get_footer(); ?>