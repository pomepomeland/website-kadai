<?php 
add_theme_support('post-thumbnails');
add_post_type_support('voice', 'excerpt');

function bcn_add($bcnObj) {
  if (is_home()) {
  
  $bcnObj->add(new bcn_breadcrumb('お知らせ', null, array('archive', 'post-clumn-archive', 'current-item')));

  $trail_tmp = clone $bcnObj->trail[1];
  $bcnObj->trail[1] = clone $bcnObj->trail[0];
  $bcnObj->trail[0] = $trail_tmp;
  }
  return $bcnObj;
  }
add_action('bcn_after_fill', 'bcn_add');
  