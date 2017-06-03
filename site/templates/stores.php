<?php snippet('header') ?>

<div class="container">
  <div class="row">
    <div class="col">
      <?php $len = count($page->children());?>
      <?php echo $len ?>
      <?php foreach($page->children() as $subpage): ?>
        <a href="<?php echo $subpage->url() ?>">
          <?php echo html($subpage->title()) ?>
        </a>
        <?php echo $subpage->location()->yaml()['lat']; ?>
      <?php endforeach ?>

    <!-- $location = $page->location()->yaml(); -->
    </div>
  </div>
</div>

<div class="">
  <?php
    $i = 1;
    $len = count($page->children());
    foreach ($page->children() as $subpage) {
        if ($i != $len) {
          echo "['";
          echo $subpage->title();
          echo "', ";
          echo $subpage->location()->yaml()['lat'];
          echo ", ";
          echo $subpage->location()->yaml()['lng'];
          echo "],";
        } else {
          echo "['";
          echo $subpage->title();
          echo "', ";
          echo $subpage->location()->yaml()['lat'];
          echo ", ";
          echo $subpage->location()->yaml()['lng'];
          echo "]";
        }
        $i++;
    }
  ?>
</div> <?php echo count($page->children());?>

<div class="container">
  <div class="row">
    <div class="col">
      <script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyA8czOO-ZWzUP-K3WOJ6z3tCsV1ZBxmU_E"
        type="text/javascript"></script>

      <div id="map" style="width: 500px; height: 400px;"></div>

      <script type="text/javascript">
        var locations = [
          <?php
            $i = 1;
            $len = count($page->children());
            foreach ($page->children() as $subpage) {
                if ($i != $len) {
                  echo "['";
                  echo $subpage->title();
                  echo "', ";
                  echo $subpage->location()->yaml()['lat'];
                  echo ", ";
                  echo $subpage->location()->yaml()['lng'];
                  echo "],";
                } else {
                  echo "['";
                  echo $subpage->title();
                  echo "', ";
                  echo $subpage->location()->yaml()['lat'];
                  echo ", ";
                  echo $subpage->location()->yaml()['lng'];
                  echo "]";
                }
                $i++;
            }
          ?>
        ];



        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 1,
          center: new google.maps.LatLng(51.50, -0.12),
          mapTypeId: google.maps.MapTypeId.ROADMAP

        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      </script>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
