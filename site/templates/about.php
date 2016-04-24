<?php snippet('header') ?>
  <main class="main" role="main">
    <h1><?php echo $page->heading()->html() ?></h1>
    <div class="about" >
      <?php echo $page->deutsch()->kirbytext() ?>
      <?php echo $page->english()->kirbytext() ?>
    </div>
    <hr>
    <div class="team" >
      <h1><?php echo $page->heading2()->html() ?></h1>
      <img src="<?php echo url('assets/images/team.jpg') ?>" alt="<?php echo $site->title()->html() ?>">
        <?php echo $page->text2()->kirbytext() ?>
    </div>
    <div class="kontakt" >
      <h1><?php echo $page->heading3()->html() ?></h1>
        <?php echo $page->text3()->kirbytext() ?>
    </div>
    <hr>
  </main>
<?php snippet('footer') ?>