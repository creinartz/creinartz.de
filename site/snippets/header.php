<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="theme-color" content="#222222"/>

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="creinartz">
  <link rel="manifest" href="manifest.json">
  <link rel="dns-prefetch" href="https://www.creinartz.de/" />
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel="shortcut icon" href="<?php echo url() ?>/favicon.ico">
  
  <?php if(isset($bNoRobots)): ?>
    <meta name="robots" content="noindex">
  <?php endif ?>

  <?php echo css('assets/css/site.css') ?>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
</head>
<body>

  <header class="header cf">
    <div class="logo-wrapper">
      <a class="logo" href="<?php echo url() ?>">
        <svg version="1.1" baseProfile="tiny" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	        width="250" height="40" viewBox="0 0 250 28" xml:space="preserve">
          <text transform="matrix(1 0 0 1 -2.002716e-05 20.6076)" font-size="28px" dominant-baseline="middle">Christoph Reinartz</text>
        </svg>
      </a>
      <h1 class="site-title">Front-End Engineer</h1>
    </div>

    <?php snippet('menu') ?>
  </header>
