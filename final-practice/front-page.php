<?php get_header(); ?>

    <header class="flex-center top-header">
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

    <div class="mainvisual top-mv">
      <p>根本的な症状改善を<br>サポートします</p>
      <div class="carousel pc">
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/carousel1.png" alt="白を基調にしたバスルームとドレッサー"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/carousel2.jpg" alt="木製の施術台"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/carousel3.png" alt="施術中の手元"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/carousel4.jpg" alt="観葉植物がある待合室"></div>
      </div>
      <div class="carousel sp">
        <div><img  src="<?php echo get_template_directory_uri(); ?>/img/top/sp-carousel1.jpg" alt="白を基調にしたバスルームとドレッサー"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/sp-carousel2.jpg" alt="木製の施術台"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/sp-carousel3.jpg" alt="施術中の手元"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/sp-carousel4.jpg" alt="観葉植物がある待合室"></div>
      </div>
    </div>

    <main>
      <section id="news" class="flex-center">
        <h2>News<span>お知らせ</span></h2>

        <?php
        $args = array( 'posts_per_page' => 1, );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
        setup_postdata( $post ); ?>

        <div>
          <div class="date">
            <p><time><?php echo get_the_date( 'Y/m/d' ); ?></time>
            <span  class="category cat-<?php echo get_the_category()[0]->slug; ?>"><?php echo get_the_category()[0]->name; ?></span></p>
          </div>
          <a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>

        <?php
        endforeach;
        wp_reset_postdata(); ?>

        <a href="<?php echo home_url( 'news' ); ?>">→ お知らせ一覧へ</a>
      </section>

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
            <div class="page-btn">
              <a href="<?php echo home_url( 'about' ); ?>">→ 当院について</a>
            </div>
          </div>
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/concept.png" alt="施術中の手元">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/sp-concept.png" alt="施術中の手元">
        </div>
      </section>

      <div class="wave-section">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/wave-bg.png" alt="緑の波形">
      </div>
      <section id="course">
        <h2 class="title-jp">コース・料金</h2>

        <p class="subtitle">当院では保険診療、自費診療ともにご対応しております</p>
        <div class="flex-center bg-container">
          <div>
            <img class="z-1" src="<?php echo get_template_directory_uri(); ?>/img/top/course1.jpg" alt="施術台">
            <h3>保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
          <div>
            <img class="z-1" src="<?php echo get_template_directory_uri(); ?>/img/top/course2.jpg" alt="施術台">
            <h3>自費診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
          <p class="bg-text">Course</p>
        </div>
        <div class="page-btn">
          <a href="<?php echo home_url( 'course' ); ?>">→ コース・料金詳細へ</a>
        </div>
        </section>

      <section id="voice">
        <div class="voice-head">
          <div class="voice-carousel pc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/voice-carousel1.jpg" alt="施術中の手元">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/voice-carousel2.jpg" alt="施術中の手元">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/voice-carousel3.jpg" alt="施術中の手元">
          </div>
          <div class="voice-carousel sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/sp-voice-carousel1.jpg" alt="施術中の手元">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/sp-voice-carousel2.jpg" alt="施術中の手元">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/sp-voice-carousel3.jpg" alt="施術中の手元">
          </div>
          <div class="voice-title">
            <h2 class="title-jp">お客様の声</h2>
          </div>
        </div>
        <p class="subtitle">痛みの改善に加えて自分で予防もできるようになりました</p>
        <div class="flex-center z-1">
          <?php 
          $args = array(
            'post_type' => 'voice',
            'post__in' => array(16,18,20),
          );
          $set_query = new WP_Query( $args ); ?>
          
          <?php if ( $set_query->have_posts() ): ?>
            <?php while ( $set_query->have_posts() ) : $set_query->the_post(); ?>

            <div class="user">
              <?php if(has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>">
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php echo get_the_excerpt(); ?></p>
            </div>

            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="page-btn">
          <a href="<?php echo get_post_type_archive_link( 'voice' ); ?>">→ お客様の声一覧へ</a>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>