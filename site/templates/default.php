<?php snippet('header') ?>

 <div class="jumbotron">
  <div class="container">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->intro()->kirbytext() ?>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
     <section class="gallery">
  <?php foreach($page->images() as $image): ?>
  <figure>
    <a href="<?php echo $image->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="">
    </a>
  </figure>
  <?php endforeach ?>
</section>
    <?= $page->text()->kirbytext() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>