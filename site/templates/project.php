<?php snippet('header') ?>

<div class="jumbotron">
	<div class="container">
		<h1><?= $page->title()->html() ?></h1>
	</div>
</div>

<section class="topbottom-padding">
<div class="container">
	<nav class="breadcrumb">
		<?php foreach($site->breadcrumb() as $crumb): ?>
		<a class="breadcrumb-item" href="<?php echo $crumb->url() ?>">
			<?php echo html($crumb->title()) ?>
		</a>
		<?php endforeach ?>
	</nav>

	<div class="row">
		<div class="col-12 col-md-6">
			<?php
			// Images for the "project" template are sortable. You
			// can change the display by clicking the 'edit' button
			// above the files list in the sidebar.
			foreach ( $page->images()->sortBy( 'sort', 'asc' ) as $image ): ?>
			<figure class="figure">
				<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" class="img-responsive"/>
				<figcaption class="figure-caption"><a href="https://twitter.com/intent/tweet?text=<?= $page->url() ?>" target="_blank" rel="noopener noreferrer"> <img src="<?php echo kirby()->urls()->assets() . '/images/twitter-bird.png' ?>" style="width: 3%;" alt="logo"> Tweet this image.</a>
				</figcaption>
			</figure>
			<?php endforeach ?>
		</div>

		<div class="col-12 col-md-6">
			<div class="row">
				<div class="col-12">
					<p>
						<?= $page->year() ?>
					</p>
					<hr/>
				</div>
				<div class="col-12">
					<a href="<?= $page->twitterurl() ?>"><?= $page->twitter()->kirbytext() ?></a>
					<hr/>
				</div>
				<div class="col-12">
					<p>
						<?= $page->text()->kirbytext() ?>
					</p>
					<hr/>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 topbottom-padding">
		<h2>More Love</h2>
		<hr>
		<div class="row no-gutters">
			<?php
			// get all page siblings
			$siblings = $page->siblings();
			// get the index nr. of the current page in the collection 
			$index = $siblings->indexOf( $page );
			// get the next four siblings (using the index as offset)
			$next4Pages = $siblings->not( $page )->offset( $index )->filterBy( 'hasImages', true )->limit( 4 );
			// loop through those pages and fetch the first image
			foreach ( $next4Pages as $p ):
				$img = $p->images()->first();
			?>
			<div class="col-12 col-sm-3">
				<a href="<?= $p->url() ?>" target="_blank" rel="noopener noreferrer">
					<?= thumb($img) ?>
				</a>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
</section>
<?php snippet('footer') ?>