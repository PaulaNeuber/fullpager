<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="http://lange-nacht-fn.de.w0146c92.kasserver.com/content/lndm/favicon.ico">
  <!-- Latest compiled and minified CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,700,600' rel='stylesheet' type='text/css'>
</head>
<body>
  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
    </a>
    <?php snippet('menu') ?>
  </header>