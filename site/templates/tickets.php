<?php snippet('header') ?>
  <main class="main" role="main">
  <div class="title">
      <?php echo $page->headline()->kirbytext() ?>
      <?php echo $page->text()->kirbytext() ?> <br>
    </div>

    <div class="vvk">
      <table style="width:100%">
        <tr>
          <th>  <img src="<?php echo url('assets/images/gessler.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
          </th>
          <th>  <img src="<?php echo url('assets/images/rathauscafe.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
          </th>
          <th>  <img src="<?php echo url('assets/images/zu.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
          </th>
          <th>  <img src="<?php echo url('assets/images/burges.jpg') ?>" alt="<?php echo $site->title()->html() ?>" /> 
          </th>
        </tr>
        <tr>
          <td>Buchhandlung Gessler 1862
          </td>
          <td>Café im Rathaus
          </td>
          <td>Zeppelin Universität
          </td> 
          <td>Burgers Burger
          </td> 
        </tr>
        <tr>
          <td>Friedrichstraße 53
          </td>
          <td>Adenauerplatz 1
          </td>
          <td>Fallenbrunnen 3
          </td> 
           <td>Fallenbrunnen 17
          </td> 
        </tr>
        <tr>
          <td>88045 Friedrichshafen
          </td>
          <td>88045 Friedrichshafen
          </td>
          <td>88045 Friedrichshafen
          </td> 
          <td>88045 Friedrichshafen
          </td> 
        </tr>
      </table>
    </div>
    <hr>
  </main>
<?php snippet('footer') ?>