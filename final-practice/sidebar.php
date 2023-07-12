<p class="news-head">カテゴリ</p>
<ul>
  <?php
     $args = array(
     'hide_empty' => 1, // 投稿記事があるカテゴリーのみ表示する
     'title_li' => '',  // リストの外側に表示するタイトルと表示形式（''であれば何も表示しない）
     );
     wp_list_categories( $args ); 
   ?>
</ul>