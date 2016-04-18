<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->heading()->html() ?></h1>
      <hr>
      <div class="location">
     
      <img src="<?php echo url('assets/images/location.png') ?>" alt="<?php echo $site->title()->html() ?>"
       <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>