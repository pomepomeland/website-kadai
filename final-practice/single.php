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
          <li><a href="<?php echo home_url( 'contact' ); ?>">ご予約・お問い合わせ</a></li>
        </ul>
      </nav>
      <div class="hamburger">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hamburger-btn.svg" alt="ハンバーガーメニュー">
      </div>
    </header>

    <div class="mainvisual">
      <p class="page-title">Information<span>お知らせ</span></p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/news/News.jpg" alt="CHIROPRACTORと書かれた建物の外観">
    </div>

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
    </div>

    <main class="newslist-page flex-center">

    <?php if(have_posts()) :?>
      <?php while (have_posts()) : the_post() ; ?>

        <article class="news-list news-detail">
          <p class="news-head"><?php the_title(); ?></p>
          <time><?php echo get_the_date(); ?></time>
          <p class="category cat-<?php echo get_the_category()[0]->slug; ?>"><?php echo get_the_category()[0]->name; ?></p>

          <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>">
          <?php endif; ?>

          <?php the_content(); ?>

        </article>

      <?php endwhile; ?>
    <?php endif; ?>

    <div class="cat-list">
      <?php get_sidebar(); ?>
    </div>

    <div class="pager bef-aft">
      <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
        <a class="before" href="<?php echo get_permalink($prevpost->ID); ?>">前の記事へ</a>
      <?php endif; ?>

      <a href="<?php echo home_url( 'news' ); ?>">
        <span class="pc">お知らせ一覧</span><span class="sp">一覧</span>
      </a>

      <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
        <a class="after" href="<?php echo get_permalink($nextpost->ID); ?>">次の記事へ</a>
      <?php endif; ?>

    </main>

    <?php get_footer(); ?>