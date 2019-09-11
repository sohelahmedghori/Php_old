<?php
include("header.php");
?>
 <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>

<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<h2>Contact us</h2>
		</div>
	</div>
	<div class="row">
		<div id="map" class="col-md-9 m-auto" style="height:500px;background-color: red"></div>
	</div>
</div>
<?php
include("footer.php");
?>


