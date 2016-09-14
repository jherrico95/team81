<?php
	include 'html_head.inc';

?>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.7475424259464!2d153.02619341470387!3d-27.477117923596126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a104bbd14e5%3A0x8b40453f37ca855e!2sQUT+Gardens+Point+Student+Centre!5e0!3m2!1sen!2sau!4v1473823091143" width="100%" height="450" frameborder="0" style="border:0; margin-top: 80px;" allowfullscreen></iframe>

<!-- CONTACT -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h1>Contact us</h1>
					<span class="st-border"></span>
				</div>
			</div>
			<div class="col-sm-4 contact-info">
				<p class="contact-content">Have an inquiry? Or maybe even a complaint (screw you, go away)? Don't be afraid to call or email us, or even just use the form to send us one directly.</p>
				<p class="st-address"><i class="fa fa-map-marker"></i> <strong>24 Pinelands Road, Sunnybank QLD 4109</strong></p>
				<p class="st-phone"><i class="fa fa-mobile"></i> <strong>(07) 3298 1487</strong></p>
				<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>hello@pinelandsmusicschool.com.au</strong></p>
			
			</div>
			<div class="col-sm-7 col-sm-offset-1">
				<form action="templates/send-contact.php" class="contact-form" name="contact-form" method="post">
					<div class="row">
						<div class="col-sm-6">
							<input type="text" name="name" required="required" placeholder="Name*">
						</div>
						<div class="col-sm-6">
							<input type="email" name="email" required="required" placeholder="Email*">
						</div>
						<div class="col-sm-6">
							<input type="text" name="subject" placeholder="Subject">
						</div>
						<div class="col-sm-6">
							<input type="text" name="website" placeholder="Website">
						</div>
						<div class="col-sm-12">
							<textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
						</div>
						<div class="col-sm-12">
							<input type="submit" name="submit" value="Send Message" class="btn btn-send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /CONTACT -->

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



<?php
	include('footer.inc');
?>
