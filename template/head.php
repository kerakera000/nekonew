<?php
global $wp_path;
global $site_url;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default ">
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= $wp_path?>/assets/img/favicon/favicon.ico">

  <?php
  get_template_part ('./include/seo');
  ?>

  <?php 
  $wp_path = get_template_directory_uri(); // テーマディレクトリのURLを取得
  ?>
  <link rel="stylesheet" href="<?= $wp_path; ?>/assets/scss/app.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- JS Library -->
  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="<?= $wp_path?>/assets/js/action.js"></script>
  <script src="<?= $wp_path?>/assets/js/comment.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
  <?php wp_head()?>
</head>
<body id="pageTop">
<div class="wrap">