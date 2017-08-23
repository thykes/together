<nav class="navbar navbar-expand-md navbar-light style="background-color: #e3f2fd;" fixed-top bg-dark">
        <a class="navbar-brand" href="<?= url() ?>" rel="home">
        <img src="<?php echo kirby()->urls()->assets() . '/images/together.svg' ?>" alt="logo"> 
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
          <ul class="navbar-nav mr-auto menu">
          </ul>
          <ul class="navbar-nav">
            <?php foreach($pages->visible() as $item): ?>
      <li class="nav-item <?= r($item->isOpen(), ' is-active') ?> ">
        <a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      </li>
      <?php endforeach ?>
          </ul>
        </div>
  </nav>