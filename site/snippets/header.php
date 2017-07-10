<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php echo css('assets/css/screen.css') ?>

</head>
<body>

<a href="/"><h1>Liz Merritt </h1></a>

<?php snippet('nav') ?>