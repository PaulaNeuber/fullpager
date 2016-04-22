<?php snippet('header') ?>
  <main class="main" role="main">
    <div id="wrapper">
      <div id="soundcloud">
        <?php echo $page->iframe()->kirbytext() ?>
      </div>
    </div>
    
    <div class="artisttext">
      <?php echo $page->text()->kirbytext() ?>
      <?php echo $page->facebook()->kirbytext() ?>  
    </div>
    <hr>
  </main>

<?php snippet('footer') ?>