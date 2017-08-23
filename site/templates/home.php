<?php snippet('header') ?>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3"><?= $page->introheader()->html() ?></h1>
        <p><?= $page->intro()->kirbytext() ?></p>
      </div>
    </div>

  <section>
      <div class="container-fluid">
        <div class="row">
        <?php snippet('showcase', ['limit' => 12]) ?>
        </div>
      </div>
</section>
<?php snippet('footer') ?>

