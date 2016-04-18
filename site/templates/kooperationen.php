<?php snippet('header') ?>

  <main class="main" role="main">
    <h1><?php echo $page->heading()->html() ?></h1>
    <div id="provinz">
      <img src="<?php echo url('assets/images/provinz.jpg') ?>" class="imgclass">
    </div> 
    <div class="molke" >
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <hr>
     <h1><?php echo $page->heading2()->html() ?></h1>
    <div class="stadtorchester" >
      <?php echo $page->text2()->kirbytext() ?>
    </div>
   <hr>
   <h1><?php echo $page->heading3()->html() ?></h1>
   <img src="<?php echo url('assets/images/jolof.jpg') ?>" class="imgclass">
    <div class="jolof" >

      <?php echo $page->text3()->kirbytext() ?>
    </div>
   <hr>
  </main>

<?php snippet('footer') ?>