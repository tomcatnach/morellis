<div class="container">
  <div class="row">
    <div class="col">
      <script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyA8czOO-ZWzUP-K3WOJ6z3tCsV1ZBxmU_E"
        type="text/javascript"></script>

      <div id="map" style="width: 100%; height: 600px;"></div>

      <?php
        $location = array();
        $location[] = array(
          (string)$page->title(),
          (string)$page->location()->yaml()['lat'],
          (string)$page->location()->yaml()['lng']
        );
        $json = json_encode($location);
      ?>

      <script type="text/javascript">
        var locations = JSON.parse('<?= $json; ?>');

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: new google.maps.LatLng(
            <?= (string)$page->location()->yaml()['lat'] ?>,
            <?= (string)$page->location()->yaml()['lng'] ?>),
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
