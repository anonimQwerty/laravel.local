@include('components.header', ['active' => $activemain])
<!-- slider holder -->
                <div class="clearfix"></div>
                <div id="slider-holder" class="clearfix">
                    
                    <!-- slider -->
                    <div class="flexslider home-slider">
                      <ul class="slides">
                        <li>
                          <img src="img/slides/01.jpg" alt="alt text" />
                        </li>
                        <li>
                          <img src="img/slides/02.jpg" alt="alt text" />
                          <p class="flex-caption">Pellentesque habitant morbi  feugiat vitae.</p>
                        </li>
                        <li>
                          <img src="img/slides/03.jpg" alt="alt text" />
                        </li>
                      </ul>
                    </div>
                    <!-- ENDS slider -->
                    
                    <div class="home-slider-clearfix "></div>
                    
                    <!-- Headline -->
                    <div id="headline">
                        <h4>HELLO, I AM FREE</h4>
                        <p class="headline-text">Simpler template is a totally FREE template for personal and commercial projects.</p> 
                        <p class="headline-text">If you are looking for a WordPress version try the  <a rel="nofollow" href="http://themeforest.net/item/simpler-wordpress-theme/1630783?ref=Ansimuz" class="read-more" >Premium Version</a></p>
                        
                    </div>
                    <!-- ENDS headline -->
                    
                    
                </div>
                <!-- ENDS slider holder -->
                
            </div>
        </header>
        
        
        
        <!-- MAIN -->
        <div id="main"> 
            <div class="wrapper clearfix">
                
                
                <!-- home-block -->
                <div class="home-block clearfix" >
                    <h1 class="home-headline">FEATURED WORK </h1>
                    
                    <!-- thumbs -->
                    <div class="clearfix" >

                        @for($i=1;$i<=9;$i++)
                        
                        <x-work_card></x-work_card>

                        @endfor
                        
                       
                        
                    </div>
                    <!-- ENDS thumbs -->
                    
                    <a href="work" class="theme-link-button">See All Work</a>
                    
                </div>
                <!-- ENDS home-block -->
                
                
                <!-- additional blocks -->
                <div class="home-add clearfix">
                    
                    <!-- left -->

                    <div class="left-home-block home-posts">
                        <h4 class="heading">FROM THE BLOG</h4>
                    @foreach($articles as $article)
                    <x-from_the_blog>
                        <x-slot:artid>{{$article->id}}</x-slot>
                        <x-slot:title>{{$article->title}}</x-slot>
                        <x-slot:preview>{{\Illuminate\Support\Str::limit($article->text, 200, $end='...')}}</x-slot>

                        <x-slot:post_date>
                            {{$article->created_at}}
                        </x-slot>

                    </x-from_the_blog>
                    @endforeach
                        
                        
                    </div>
                    <!-- ENDS left -->
                    
                    <!-- right -->
                    <div class="right-home-block">
                        
                        
                        <h4 class="heading">CLIENTS</h4>
                        
                        <!-- logos -->
                        <ul class="clients-logos clearfix">
                            <li><a href="#"><img src="img/dummies/logo1.png" alt="logo" /></a></li>
                            <li><a href="#"><img src="img/dummies/logo2.png" alt="logo" /></a></li>
                            <li><a href="#"><img src="img/dummies/logo3.png" alt="logo" /></a></li>
                            <li><a href="#"><img src="img/dummies/logo4.png" alt="logo" /></a></li>
                            <li><a href="#"><img src="img/dummies/logo5.png" alt="logo" /></a></li>
                            <li><a href="#"><img src="img/dummies/logo6.png" alt="logo" /></a></li>
                        </ul>
                        <!-- ENDS logos -->
                        
                        
                        <h4 class="heading">TESTIMONIALS</h4>
                        
                        <!-- testimonial slider -->
                        <div class="flexslider testimonial-slider">
                          <ul class="slides">
                            <li>
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                              <div class="client-name">- Luis Zuno, Webdesigner</div>
                            </li>
                            <li>
                              at vitae, ultricies eget, tempor sit amet, ante. Donec 
                              <div class="client-name">- Luis Zuno, Webdesigner</div>
                            </li>
                            
                           <li>
                             Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
                             <div class="client-name">- Luis Zuno, Webdesigner</div>
                            </li>
                          </ul>
                          
                        </div>
                        <!-- ENDS testimonial slider -->
                    
                        
                    </div>
                    <!-- ENDS right -->
                    
                </div>
                <!-- ENDS additional blocks -->

            <!-- Fold image -->
            <div id="fold"></div>
            </div>
            
        </div>
        <!-- ENDS MAIN -->
<x-footer></x-footer>