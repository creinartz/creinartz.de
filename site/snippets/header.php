<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="creinartz">
   <link rel="manifest" href="manifest.json">
  <link rel="dns-prefetch" href="http://www.creinartz.de/" />
  <link rel="shortcut icon" href="<?php echo url() ?>/favicon.ico">
  <?php if(isset($bNoRobots)): ?>
    <meta name="robots" content="noindex">
  <?php endif ?>

  <?php echo css('assets/css/site.css') ?>
</head>
<body>

  <header class="header cf" role="banner">
    <div class="logo-wrapper">
      <a class="logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo-cr.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <h1 class="site-title">Front-End Engineer</h1>
    </div>

    <?php snippet('menu') ?>
  </header>
