<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->heading()->html() ?></h1>
      <div class="location">
      <img src="<?php echo url('assets/images/location.png') ?>" alt="<?php echo $site->title()->html() ?>">
      </div> 
      <hr>
    </div>
    <div class="anfahrt">
      <h1><?php echo $page->heading2()->html() ?></h1>
      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:500px;'><div id='gmap_canvas' style='height:300px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">                 embed google maps             </a></small></div><div><small><a href="http://www.autohuren.world/">autohuren</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(47.6657465,9.443947600000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(47.6657465,9.443947600000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Kulturhaus Caserne</strong><br>Fallenbrunnen 17, Friedrichshafen<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
  </main>

<?php snippet('footer') ?>