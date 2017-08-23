<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>



  <?php foreach($projects as $project): ?>


    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-pad">
    <a href="<?= $project->url() ?>" class="">
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
      <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="img-responsive"><?php endif ?>
      </a>
    </div><!-- end item -->

  <?php endforeach ?>