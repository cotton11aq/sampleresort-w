<?php
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($separator){
  $separator = '|';
  return $separator;
}

add_filter('wp_enqueue_scripts',function() {
  wp_enqueue_script('jquery', false, array(), false, false);
});

add_theme_support('menus');