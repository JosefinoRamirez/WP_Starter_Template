<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proseso Studio</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>?=0.1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
  </head>
  <body>
    <header>

      <a href="" class="logo">
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo.svg" alt="">
      </a>

      <a href="#" class="ham_btn">
        <span></span>
      </a>

      <nav class="menu">
        <?php get_template_part( 'menu' ); // Navigation bar (menu.php) ?>
      </nav>

    </header>
