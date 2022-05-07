@include('components.header', ['active' => $activemain])
</div>
		</header>

		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
				
				<!-- masthead -->
				<div class="masthead clearfix">
					<h1>ABOUT</h1>
					<ul class="cat-nav">
						<li class="current"><a href="#">All</a></li>
						<li><a href="#">Audio</a></li>
						<li><a href="#">Print</a></li>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Motion Graphics</a></li>
						<li><a href="#">Logo</a></li>
						<li><a href="#">Photo</a></li>
					</ul>
				</div>
				<div class='mh-div'></div>
				<!-- ENDS masthead -->
				
				
				
				<!-- portfolio list -->
	        	<div class="featured portfolio-list clearfix">
	        		
	        		<x-about_small></x-about_small>
	        		<x-about_small></x-about_small>
	        		

					<x-about_big></x-about_big>
	        		
	        		<x-about_small></x-about_small>
	        		<x-about_small></x-about_small>

					<x-about_medium></x-about_medium>

	        		<x-about_small></x-about_small>
	        		<x-about_medium></x-about_medium>
	        		<x-about_small></x-about_small>
	        		

	        		<x-about_small></x-about_small>
	        		
	        		<x-about_small></x-about_small>
	        		<x-about_medium></x-about_medium>
	        		<x-about_small></x-about_small>
	        		

	        		<x-about_small></x-about_small>
					        		
	        	</div>
	        	<!-- ENDS featured -->
	        	
	        	
	        	<!-- pager -->
        		<ul class="pager">
					<li class="paged">Page 1 of 2</li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
				<div class="clearfix"></div>
	        	<!-- ENDS pager -->

        	
        	

			<!-- Fold image -->
			<div id="fold"></div>
			</div>
			
		</div>
		<!-- ENDS MAIN -->
<x-footer></x-footer>