<?php snippet('header') ?>

  <main class="main" role="main">

    
      <h1><?php echo $page->heading()->html() ?></h1>
      <hr>
      <div class="about">
      <?php echo $page->text()->kirbytext() ?>
      </div>

     
       <h1><?php echo $page->heading2()->html() ?></h1>

       <div class="about">
      <hr>
      <?php echo $page->text2()->kirbytext() ?>
      </div>
    

  </main>

<?php snippet('footer') ?>