<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">

    <!-- Twitter Card -->
     <?php
        // Images for the "project" template are sortable. You
        // can change the display by clicking the 'edit' button
        // above the files list in the sidebar.
        foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@timothyhykes" />
    <meta name="twitter:title" content="#WeStandTogether" />
    <meta name="twitter:description" content="<?= $page->title()->html() ?>'s' design against hate at heretogether.us" />
    <meta name="twitter:image" content="<?= $image->url() ?>" />
     <?php endforeach ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0e3a5e">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <?= css('assets/css/style.css') ?>

  </head>
<body>
 <?php snippet('analyticstracking')?> 
 <?php snippet('menu') ?>
