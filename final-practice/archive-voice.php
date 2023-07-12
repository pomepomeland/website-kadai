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
      <p class="page-title">Voice<span>お客様の声</span></p>
      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/voice/Voice1.jpg" alt="くすんだピンクの花とリボンと手紙">
      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/voice/SP_Voice1.jpg" alt="くすんだピンクの花とリボンと手紙">
    </div>

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
    </div>

    <main class="archive-voice">

      <?php if(have_posts()) :?>
        <?php while (have_posts()) : the_post() ; ?>
          <article class="flex-center">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('large'); ?>">
            <?php endif; ?>
            <div>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>

      
      <div class="pager">
        <?php the_posts_pagination(
          array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'type'          => 'list', // 戻り値の指定 (plain/list)
          )
        ); ?>
      </div>
    </main>

    <?php get_footer(); ?>