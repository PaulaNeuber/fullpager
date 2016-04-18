<?php snippet('header') ?>

  <main class="main artists" role="main">

    <div class="text">
      <h1><?php echo $page->heading()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

      <ul><!-- 
         --><?php foreach($page->children()->visible() as $artist): ?><!-- 
           --><li>
            <figure>
              <?php if($artist->images()->first()): ?>
                <div class="inner">
                    <img src="<?php echo $artist->images()->first()->url() ?>" alt="<?php echo $artist->title()->html() ?>">
                  <div class="overlay">
                    <div class="overlay__inner">
                      <?php echo $artist->title() ?>
                   </div>
                  </div>
                </div>
                <a class="link" href="<?php echo $artist->url() ?>"></a>
              <?php endif ?>
            </figure>
          </li><!-- 
         --><?php endforeach ?><!-- 
       --></ul>

  </main>

<?php snippet('footer') ?>