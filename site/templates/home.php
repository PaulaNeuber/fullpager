<?php snippet('header') ?>

  <main class="main" role="main">
   
    <div class="title">
      <?php echo $page->title()->kirbytext() ?>
    </div>
   
    <div class="home">
      <div class="home_column">
        <?php echo $page->text1()->kirbytext() ?>
      </div><!-- 
       --><div class="home_column">
        <?php echo $page->text2()->kirbytext() ?>
      </div><!-- 
       --><div class="home_social">
          <div class="home_social__inner">
            <?php echo $page->text3()->kirbytext() ?>
          </div>
      </div>
    </div>
 <hr id="start">
  </main>




<?php snippet('footer') ?>