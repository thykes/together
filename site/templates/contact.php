  <?php snippet('header') ?>

    <div class="jumbotron">
      <div class="container">
        <h2><?= $page->title()->html() ?></h2>
        <p><?= $page->intro()->kirbytext() ?></p>
      </div>
    </div>

  <section class="topbottom-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 mx-auto">
            
         
            <div class="row">
              <div class="col-12 toppadding">
                <?= $page->text()->kirbytext() ?>
              </div>
            </div>
          </div>
        <div class="col-12 col-md-8 mx-auto toppadding">

        <form action="<?php echo $page->url() ?>" method="POST">
   <input name="email" type="email" value="<?php echo $form->old('email'); ?>">
   <textarea name="message"><?php echo $form->old('message'); ?></textarea>
   <input type="file" name="filefield" required/>
   <?php echo csrf_field(); ?>
   <?php echo honeypot_field(); ?>
   <input type="submit" value="Submit">
</form>
<?php if ($form->success()): ?>
   Success!
<?php else: ?>
   <?php snippet('uniform/errors', ['form' => $form]); ?>
<?php endif; ?>
         
        </div>
         
      </div>
    </div>



      

 

</section>

<?php snippet('footer') ?>