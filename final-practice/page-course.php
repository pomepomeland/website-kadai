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
      <p class="page-title">Course<span><?php the_title(); ?></span></p>
      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/course/courseprice.jpg" alt="施術中の手元">
      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/course/sp-courseprice.jpg" alt="施術中の手元">
    </div>

    <main>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
          bcn_display();
        }?>
      </div>

      <section id="course" class="page-bg">
        <h2 class="title-jp">コース・料金</h2>
        <p class="subtitle">当院では保険診療、自費診療ともにご対応しております</p>
        <div class="flex-center">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/course1.jpg" alt="施術台">
            <h3>保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/course2.jpg" alt="施術台">
            <h3>自費診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="insurance" class="flex-center price">
        <div>
          <h2 class="title-en">Insurance<span>保険診療</span></h2>
          <p class="pc">
            健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>
            「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
          </p>
          <ul>
            <li>骨折・打撲・捻挫・脱臼</li>
            <li>スポーツ診療</li>
            <li>交通事故</li>
          </ul>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/course/insurance.jpg" alt="施術台">
      </section>

      <section id="self-pay" class="flex-center price">
        <div>
          <h2 class="title-en">Self-pay<span>自費診療</span></h2>
          <p class="pc">
            慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
          </p>
          <ul>
            <li>腰痛・肩こり</li>
            <li>冷え性・だるさ</li>
            <li>骨盤・背骨矯正</li>
          </ul>
          <p class="pc">
            初回　8,800円（税込） / 50分<br>
            2回目以降　6,600円（税込） / 30分
          </p>
          <p class="sp">
            初回<br>
            8,800円（税込） / 50分<br>
            <br>
            2回目以降<br>
            6,600円（税込） / 30分<br>
          </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/course/selfpay.jpg" alt="施術台">
      </section>
    </main>

    <?php get_footer(); ?>