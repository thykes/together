<?php snippet('header') ?>

    <div class="jumbotron">
      <div class="container">
        <h2><?= $page->title()->html() ?></h2>
        <p><?= $page->text()->kirbytext() ?></p>
      </div>
    </div>

  <section>
      <div class="container-fluid">
        <div class="row">
        <?php snippet('showcase') ?>
        </div>
      </div>
</section>
<?php snippet('footer') ?>