<?php
	include 'html_head.inc';
?>

<div class="image-top-banner" id="teacher-banner"></div>

<div class="container blog-page">
	
	<div class="section-title">
		<h1>Teachers</h1>
		<span class="st-border"></span>
	</div>

	<div class="row">
		<div class="col-md-9">
			<div class="teacher-profile">
				<div class="col-sm-4 profile-img">
					<img src="images/members/Jose.jpg"/>
				</div>
				<div class="col-sm-8 profile-info">
					<h3>Jose Daniel Legaspi <br/><span>Vocal Coach</span></h3>
					<p>
						First finding fame by creating cover songs on Instagram, Jose went on to develop a solo music career overseas, under the YG label. After a year, he travelled the world performing with bands such as Electric Zebra, collaborated with artists such as Abra, and recorded with producers like Cha Cha Malone and Dog Club Records. 
					</p>
					<p>
						Working with high profile artists and producers makes him a top vocal coach in the industry. In his downtime, Jose Daniel Legaspi supports up and coming vocalists at Pinelands Music School.
					</p>
				</div>
			</div>

			<div class="teacher-profile">
				<div class="col-sm-4 profile-img">
					<img src="images/members/Tyler.jpg"/>
				</div>
				<div class="col-sm-8 profile-info">
					<h3>Tyler Murphy <br/><span>Banjo and Accordion</span></h3>
					<p>
						Tyler's first instrument was found during kerbside clean up at the tender age of 21. He has since proven himself to be an incredible Banjo, and Accordion player. He still has the banjo that he found on that fateful day on the side of the road. It is now mounted in his own personal music studio. As a constant reminder of where he come from. 
					</p>
					<p>
						His Accordion came from the illustrious Spanish manufactures; The Three Jose's. The Accordion now takes up the majority of his time as there is now a real cult like following of the ol' wind piano.
					</p>
					<p>
						He next instrument to learn is the Bagpipes, inspired from he early memories of his Scottish neighbours. He remembers the glorious night listening at night while they played the hearts out.
					</p>
				</div>
			</div>

			<div class="teacher-profile">
				<div class="col-sm-4 profile-img">
					<img src="images/members/Melissa.jpg"/>
				</div>
				<div class="col-sm-8 profile-info">
					<h3>Melissa Davey <br/><span>Piano Teacher</span></h3>
					<p>
						Melissa is one of the most awarded pianists in Australia having won the Queensland Piano Eisteddfod and the Australian National Eisteddfod among other numerous Australian and international titles. First striking the keys of a piano at the age of four under the guidance of her grandfather, Melissa has gone on to play some of the world's greatest concert halls. Now as an AMEB certified teacher she is graciously making her time available as a teacher for Pinelands Music School for exclusive one on one lessons.
					</p>
				</div>
			</div>

			<div class="teacher-profile">
				<div class="col-sm-4 profile-img">
					<img src="images/members/Jamie.jpg"/>
				</div>
				<div class="col-sm-8 profile-info">
					<h3>Jamie Pear <br/><span>Violin Teacher</span></h3>
					<p>
						Born and raised in Brisbane, Australia, Jamie Pear began his musical education at the age of seven. At the age of 16, he discovered that violin was his instrument of passion and he decided to pursue a career in viola performance. During grade school, he performed and competed in a variety of music festivals and state conventions. His violin studies continued until he moved to Melbourne for his undergraduate studies at the University of Melbourne. 
					</p>
					<p>
						At University of Melbourne, Jamie studied classic violin. He regularly performed in famous concert halls, and completed several recording for fellow composers. During his Junior year, he was accepted into a Music Honors programs, where he was awarded with a High Distinction Honors at the end of the program. Jamie graduated in 2010, with a Bachelor’s degree in Music and Violin Performance.
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-3 sidebar">
			<div>
				<p>
					Want one of their phone numbers? Contact us now and we&#39;ll pass on the message!
				</p>
				<p>
					<a href="contact.php"> Contact Us </a>
				</p>
			</div>
			<div>
				<p>Find Us!</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.7398936909253!2d153.0262344155344!3d-27.477355982887758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a104c721d41%3A0xaeb9c00d1ef00171!2sQUT+Gardens+Point+Campus!5e0!3m2!1sen!2sau!4v1477378755802" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<div class="classes-form row">
		<?php
			include('createDB.inc');
			
			$pdo4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
			try  
			{  
			$teachers = $pdo4->query('SELECT * FROM `teachers`'); 
			//$result2 = $pdo->query('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture, imageAlt FROM parks'); 
			//$suburb1 = $pdo->query('SELECT distinct suburb  FROM parks');
			}
			catch (PDOException $e)  
			{   
			echo $e->getMessage();  
			}			

			echo'<table style="width:100%;">';
			foreach ($teachers as $teacher){					
					
						echo'<tr>';
							echo '<td>';
								echo $teacher['firstName'].' '.$teacher['lastName'];
							echo '</td>';
							echo '<td>';
								echo $teacher['email'];
							echo '</td>';
							echo '<td><a href="lesson.php?teacher=',$teacher['accountNo'],'">Book a lesson</a></td>';
						 
						echo'</tr>';
					
			}
			echo '</table>';	
		?>
	</div>

</div>

<?php
	include('footer.inc');
?>