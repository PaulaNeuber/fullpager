<?php snippet('header') ?>

  <main class="main" role="main">
   
    <div class="title">
      <?php echo $page->title()->kirbytext() ?>
    </div>
    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <hr>


  </main>

<?php snippet('footer') ?>