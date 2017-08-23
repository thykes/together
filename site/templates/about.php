<?php snippet('header') ?>

<div class="jumbotron">
  <div class="container">
    <h2><?= $page->title()->html() ?></h2>
    <?= $page->intro()->kirbytext() ?>
  </div>
</div>

<section class="topbottom-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
         <nav class="breadcrumb">
  <?php foreach($site->breadcrumb() as $crumb): ?>
    <a class="breadcrumb-item" href="<?php echo $crumb->url() ?>"><?php echo html($crumb->title()) ?></a>
    <?php endforeach ?>
  </nav>
      </div>
      <div class="col-12 col-md-8 mx-auto">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </div>
</section>

<?php snippet('footer') ?>