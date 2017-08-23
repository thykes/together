<div class="col-12 col-sm-3">
        <?php
if($page->hasNextVisible()) {
  $image = $page->nextVisible()->images()->first();
  echo thumb($image, array());
}
?>

<?php foreach($page->gallery()->yaml() as $image): ?>
        <?php if($img = $page->image($image)): ?>
          <div class="swiper-slide"> <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" /></div>
        <?php endif ?>
      <?php endforeach ?>
    </div>