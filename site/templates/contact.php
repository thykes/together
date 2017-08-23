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
            
         <?php if($image = $page->image()): ?>
                <img src="<?php echo $image->url() ?>" class="img-fluid" alt="">
                <?php endif ?>
            <div class="row">
              <div class="col-12 toppadding">
                <?= $page->text()->kirbytext() ?>
              </div>
            </div>
          </div>
        <div class="col-12 col-md-8 mx-auto toppadding">
          <form enctype="multipart/form-data" action="<?php echo $page->url()?>#form" method="post">

          <?php if($alert): ?>
            <div class="alert">
              <ul>
                <?php foreach($alert as $message): ?>
                <li><?php echo html($message) ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          <?php endif ?>

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="First and Last Name" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="john@name.com" required>
          </div>

          <div class="form-group">
            <label for="text">Message</label>
            <textarea class="form-control" id="text" name="text" rows="5" required=""></textarea>
          </div>
          
          <div class="box">
          <input type="file" name="file-3[]" id="file-3" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple="" style="
              width: 0.1px;
              height: 0.1px;
              opacity: 0;
              overflow: hidden;
              position: absolute;
              z-index: -1;
          ">
          <label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Choose a file…</span></label>
          </div>
            
            

            <input type="submit" name="submit" value="Send Your Message" class="btn btn-primary pull-right">

            <!--<input type="submit" name="submit" value="Submit">-->
            
          </form>

        </div>
         
      </div>
    </div>



      

 

</section>

<?php snippet('footer') ?>