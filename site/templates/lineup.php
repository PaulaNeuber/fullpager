<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->heading()->html() ?></h1>
      <div class="timetable">
      <img src="<?php echo url('assets/images/timetable.png') ?>" alt="<?php echo $site->title()->html() ?>">
      </div> 
      <hr>
    </div>
  </main>

<?php snippet('footer') ?>