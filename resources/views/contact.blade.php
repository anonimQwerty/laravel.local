@include('components.header', ['active' => $activemain])
</div>
		</header>
<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">

				<!-- masthead -->
				<div class="masthead clearfix">
					<h1>CONTACT</h1><span class="subheading">Get in touch</span>
				</div>
				<div class='mh-div'></div>
				<!-- ENDS masthead -->
				
				<!-- page content -->
	        	<div id="page-content" class="clearfix"> 
	        	
	        		<!-- GOOGLE MAPS -->
					<script type="text/javascript" src="/jsapi?key=ABQIAAAAyXu_1Zw3-DbyonSxgLICyxSvd_PWAzQYT6cPPLRqr8-D213wYRS98SYvGv88GueR8G34jgm2pizkyA" ></script>
					<script type="text/javascript" >google.load("maps","2.x");</script>
					
					<script type="text/javascript">
						
						jQuery(document).ready(function($) {
						
						//##########################################
						// Google maps
						//##########################################
						
						// You can get the latitud and Longitude values at http://itouchmap.com/latlong.html
						
						var latitude = 44.8011821;
						var longitude = -68.7778138;
						
						// center map
						var map = new GMap2(document.getElementById("map")); 
						var point = new GLatLng(latitude, longitude); 
						map.setCenter(point, 16);
						
						// Set marker
						marker = new GMarker(point); 
						map.addOverlay(marker);
						
						// controls
						map.addControl(new GLargeMapControl());
						
						});
					</script>
					<h4 class="heading">Location</h4>
					<div id="map"></div>
					<!-- ENDS GOOGLE MAPS -->
       	
	        		<div class='section-div'></div>
	        		
					<!-- 2 cols -->
					<div class="left-page-block">
						<h4 class="heading">Contact form</h4>
						<!-- form -->
						<script type="text/javascript" src="js/form-validation.js"></script>
						<form id="contactForm" action="/form" method="post">
							<p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
							<fieldset>
								<div>
									<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
									<label>Name</label>
								</div>
								<div>
									<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
									<label>Email</label>
								</div>
								<div>
									
									<input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
									<label>Website</label>
								</div>
								<div>
									<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
								</div>
								
								<!-- send mail configuration -->
								<input type="hidden" value="your@email.com" name="to" id="to" />
								<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
								<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
								<!-- ENDS send mail configuration -->
								
								<p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
							</fieldset>
							
						</form>
						<p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
						<!-- ENDS form -->
					</div>
					
					<div class="right-page-block">
						<h4 class="heading">Address info</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor si tincidunt quis, accumsan porttitor, facilisis luctus, mets.</p>
		        		
		        		<ul class="address-block">
		        			<li class="address">Address line, city, state ZIP</li>
		        			<li class="phone">+123 456 789</li>
		        			<li class="mobile">+123 456 789</li>
		        			<li class="email"><a href="mailto:email@server.com">email@server.com</a></li>
		        		</ul>
					</div>
					<!-- ENDS 2 cols -->
					
					
					
					
				
        		</div>
        		<!-- ENDS page content -->
        	
        	

			<!-- Fold image -->
			<div id="fold"></div>
			</div>
			
		</div>
		<!-- ENDS MAIN -->
<x-footer></x-footer>