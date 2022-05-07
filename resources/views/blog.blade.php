@include('components.header', ['active' => $activemain])
</div>
		</header>
		
		
		
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
				
				<!-- masthead -->
				<div class="masthead clearfix">
					<h1>BLOG</h1><span class="subheading">This is a subheading</span>
				</div>
				<div class='mh-div'></div>
				<!-- ENDS masthead -->
			
				
				
				<!-- posts list -->
	        	<div id="posts-list" class="clearfix"> 	        	
	        		@foreach($articles as $article)
					<x-blog_card>
						<x-slot:created_at>
							{{$article->created_at}}
						</x-slot>
						<x-slot:id>
							{{$article->id}}
						</x-slot>
						<x-slot:title>
							{{$article->title}}
						</x-slot>
						<x-slot:author>
							{{$article->author}}
						</x-slot>
						<x-slot:photos>
							{{$article->photo}}
						</x-slot>
						<x-slot:text>
							{{$article->text}}

						</x-slot>
					</x-blog_card>
					@endforeach
					
					
					
					<!-- page-navigation -->
					<div class="page-navigation clearfix">
						<div class="nav-next"><a href="{{$articles->previousPageUrl()}}">&#8592; Older Entries </a></div>
						<div class="nav-previous"><a href="{{$articles->nextPageUrl()}}">Newer Entries &#8594;</a></div>
					</div>
					<!--ENDS page-navigation -->
					
				
        		</div>
        		<!-- ENDS posts list -->
        	
        	
        	<!-- sidebar -->
        	<aside id="sidebar">
        		
        		<ul>
	        		<li class="block">
		        		<h4>Text Widget</h4>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. 
	        		</li>
	        		
	        		<li class="block">
		        		<h4>Categories</h4>
						<ul>
							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
						</ul>
	        		</li>
	        		
	        		<li class="block">
		        		<h4>Archives</h4>
						<ul>
							<li class="cat-item"><a href="#" title="title">January</a></li>
							<li class="cat-item"><a href="#" title="title">February</a></li>
							<li class="cat-item"><a href="#" title="title">March</a></li>
						</ul>
	        		</li>
        		
        		</ul>
        		
        		<em id="corner"></em>
        	</aside>
			<!-- ENDS sidebar -->

			<!-- Fold image -->
			<div id="fold"></div>
			</div>
			
		</div>
		<!-- ENDS MAIN -->
<x-footer></x-footer>