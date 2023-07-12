<div class="page-up">
      <img src="<?php echo get_template_directory_uri(); ?>/img/btn_Back.svg" alt="トップに戻るボタン">
    </div>

    <div class="wave-section">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top/wave-bg.png" alt="緑の波形">
    </div>
    <div id="access">
      <h2 class="title-jp">お気軽にご来院ください</h2>
      <div class="flex-center">
        <div>
          <p><span>JR「秋葉原駅」より徒歩1分</span></p>
          <p>〒101-0022<br>
          東京都千代田区神田練塀町300番地<br>
          住友不動産秋葉原駅前ビル 5F</p>
          <p>tel: <span>03-1234-5678</span></p>
          <table>
            <tr>
              <th>営業時間</th>
              <th>月</th>
              <th>火</th>
              <th>水</th>
              <th>木</th>
              <th>金</th>
              <th>土</th>
              <th>日</th>
            </tr>
            <tr>
              <td>9:00〜12:30</td>
              <td>●</td>
              <td>●</td>
              <td>−</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
            <tr>
              <td>15:30〜20:00</td>
              <td>●</td>
              <td>●</td>
              <td>−</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
          </table>
          <a class="btn" href="<?php echo home_url( 'contact' ); ?>">ご予約・お問い合わせはこちらから</a>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068678112273!2d139.77207767430968!3d35.699927528949196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1687629536160!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <footer>
      <div class="flex-center">
      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="SAMURAI整体院のロゴ">
      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sp-logo.png" alt="SAMURAI整体院のロゴ">
        <ul class="flex-center">
          <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
          <li><a href="<?php echo home_url( 'about' ); ?>">当院について</a></li>
          <li><a href="<?php echo home_url( 'course' ); ?>">コース・料金</a></li>
          <li><a href="<?php echo home_url( 'news' ); ?>">お知らせ</a></li>
          <li><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>">お客様の声</a></li>
          <li><a href="<?php echo home_url( 'contact' ); ?>">ご予約・お問い合わせ</a></li>
        </ul>
      </div>
      <div class="copy">
        <p>&copy;2023 SAMURAI整体院</p>
      </div>
    </footer>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
      var path ="<?php echo get_template_directory_uri(); ?>";
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>