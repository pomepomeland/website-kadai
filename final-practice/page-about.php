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
      <p class="page-title">About<span><?php the_title(); ?></span></p>
      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/about/about.jpg" alt="施術中の手元">
      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/about/sp-about.jpg" alt="施術中の手元">
    </div>

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
    </div>

    <main>
      <section id="concept">
        <div class="flex-center">
          <div>
            <div class="bg-container">
              <h2 class="title-en z-1">Concept<span>特徴</span></h2>
              <p class="bg-text">Concept</p>
            </div> 
            <p class="catch z-1">日々変化する<br class="pc">カラダと心を癒す<br class="pc">パーソナル<br class="pc">トレーナーとして</p>
            <p>当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
            <p>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
            <p>ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
          </div>
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/concept.png" alt="施術中の手元">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/sp-concept.png" alt="施術中の手元">
        </div>
      </section>

      <section id="flow">
        <div class="flex-center">
          <div>
          <div class="bg-container">
            <h2 class="title-en z-1">Flow<span>施術の流れ</span></h2>
            <p class="bg-text">Flow</p>
          </div> 

            <ol>
              <li>受付</li>
              <li>問診票のご記入</li>
              <li>カウンセリング</li>
              <li>施術</li>
              <li>アフターカウンセリング</li>
            </ol>
          </div>
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/about/flow.png" alt="カウンセリングの様子">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/about/sp-flow.png" alt="カウンセリングの様子">
        </div>
        </section>

      <section id="point">
        <h2 class="title-jp">根本改善のポイント</h2>
        <p class="subtitle">お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br>
        ご自身でできるケアなども含めて施術方針をお作りします。</p>
        <div class="flex-center">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/Point1.jpg" alt="カウンセリングの様子">
            <h3>丁寧なカウンセリング</h3>
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/Point2.jpg" alt="PCとノート">
            <h3>徹底的分析</h3>
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/Point3.jpg" alt="バインダーと背骨の図">
            <h3>施術計画のご提案</h3>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>