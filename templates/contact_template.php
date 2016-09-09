<?php
	include 'html_head.inc';

?>

<div class="top-header">
	
	<div class="col-md-7">
	</div>
	
	<div class="col-md-5">
	</div>

</div>

<div class="home-page-content">
	
	<!--banner div should have fixed width-->
	<div id="home-banner">
	</div>

	<div class="home-elements">
		
		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		 <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYOertwWLoBJGxLJhp8Z3Bu-mlOIFdnA4&callback=initMap">
    </script>

    <h2>Contact Info</h2>
    <p>24 pinelands Road, Sunnybank QLD, 4109</p>
    <p>(07) 3298 1487</p>
    <p>hello@pinelandsmusicschool.com.au</p>

    <h2>Social</h2>

	</div>

</div>

<?php
	include('footer.inc');
?>
