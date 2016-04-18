<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>
"<?php echo url('assets/images/logo.jpg') ?>"
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo url('assets/images/slideshow/2015_Casino.jpg') ?>"

    </div>
    <div class="item">
      <img src="assets/images/slideshow/2015_Dose.jpg" alt="Dose">
    </div>
    <div class="item">
      <img src="assets/images/slideshow/2015_Hof.jpg" alt="Duo">
    </div>
    <div class="item">
      <img src="assets/images/slideshow/2015_Hof2.jpg" alt="Hof II">
    </div>
    <div class="item">
      <img src="assets/images/slideshow/2015_Hof2.jpg" alt="Hof III">
    </div>
    <div class="item">
      <img src="assets/images/slideshow/2015_Hof3.jpg" alt="Hof III">
    </div>
    <div class="item">
      <img src="assets/images/slideshow/2015_Luft.jpg" alt="Luft">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </main>

<?php snippet('footer') ?>