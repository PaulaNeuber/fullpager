<?php snippet('header') ?>
  <main class="main" role="main">
  <div class="title">
      <?php echo $page->headline()->kirbytext() ?>
    </div>
    <div class="text">
      <h1><?php echo $page->heading()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <table style="width:100%">
      <tr>
        <td>  <img src="<?php echo url('assets/images/gessler.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
        </td>
        <td>  <img src="<?php echo url('assets/images/rathauscafe.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
        </td>
        <td>Zeppelin Universität
        </td> 
      </tr>
      <tr>
        <td>Buchhandlung Gessler 1862
        </td>
        <td>Café im Rathaus
        </td>
        <td>Zeppelin Universität
        </td> 
      </tr>
      <tr>
        <td>Friedrichstraße 53
        </td>
        <td>Adenauerplatz 1
        </td>
        <td>Fallenbrunnen 3
        </td> 
      </tr>
      <tr>
        <td>88045 Friedrichshafen
        </td>
        <td>88045 Friedrichshafen
        </td>
        <td>88045 Friedrichshafen
        </td> 
      </tr>
    </table>
  </main>
<?php snippet('footer') ?>