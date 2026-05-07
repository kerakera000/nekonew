<?php
/**
 * ページネーション出力関数
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 */
function pagination($pages, $paged, $range = 2, $show_only = false)
{
  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように
  $param = '';
  if(isset($_GET['category'])){
    $param = '?category='.$_GET['category'];
  }
  //表示テキスト
  $text_first = "«";
  $text_before = "";
  $text_next = "";
  $text_last = "»";

  if ($show_only && $pages === 1) {
    // １ページのみで表示設定が true の時
    echo '<ul class="c-pager"><li class="is-current"><a>1</a></li></ul>';
    return;
  }

  if ($pages === 1) return;    // １ページのみで表示設定もない場合

  if (1 !== $pages) {
    echo '<ul class="c-pager">';
    // 「前へ」 の表示
    $prevState = '';
    if ($paged > 1) {
      $prevState = 'js-active';
    }
    echo '<li class="c-pager__prev '.$prevState.'"><a class="c-pager__prevLink" href="', get_pagenum_link($paged - 1), ''.$param.'">', $text_before, '</a></li>';

    for ($i = 1; $i <= $pages; $i++) {

      if ($i <= $paged + $range && $i >= $paged - $range) {
        // $paged +- $range 以内であればページ番号を出力
        if ($paged === $i) {
          echo '<li class="c-pager__item is-current">', $i, '</li>';
        } else {
          echo '<li class="c-pager__item"><a class="c-pager__link" href="', get_pagenum_link($i), ''.$param.'">', $i, '</a></li>';
        }
      }

    }
    // 「次へ」 の表示
    $nextState = '';
    if ($paged < $pages) {
      $nextState = 'js-active';
    }
    echo '<li class="c-pager__next '. $nextState .'"><a class="c-pager__nextLink" href="', get_pagenum_link($paged + 1), ''.$param.'">', $text_next, '</a></li>';
    echo '</ul>';
  }
}

?>