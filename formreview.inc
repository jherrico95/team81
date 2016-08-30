		
		
		<h1>Review</h1>
		<form action="review.php" method="POST">
		<fieldset>
			<?php
			    require('fields.inc');
				
			?>
		
			<div class="field">
			<label for="rating">Rating:</label>
				<select name="rating" id="rating">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
				</select>
			</div>	

			<div class="field">
			<label for="review">Review:</label><br>
			<textarea name="reviewtext" id="reviewtext" rows="3" cols="40"></textarea>
			</div>
		
			<input name="review" type="submit" value="SUBMIT"/>
		</fieldset>