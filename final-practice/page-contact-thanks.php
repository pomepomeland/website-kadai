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

    <main class="contact-form contact-thanks">
      <h2>お問い合わせ内容を送信しました</h2>
      <p>ありがとうございます。２営業日以内にご返信いたします。</p>
      <a class="btn" href="<?php echo home_url(); ?>">戻る</a>
    </main>

    <?php get_footer(); ?>