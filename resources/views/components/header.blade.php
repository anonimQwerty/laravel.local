<!doctype html>
<html class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>SIMPLER</title>
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" media="all" href="/css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
        
        
        <!-- JS -->
        <script src="/js/jquery-1.6.4.min.js" defer></script>
        <script src="/js/css3-mediaqueries.js" defer></script>
        <script src="/js/custom.js" defer></script>
        <script src="/js/tabs.js" defer></script>
        
        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="/css/superfish.css" /> 

        <!-- ENDS superfish -->
        
        <!-- prettyPhoto -->
        <link rel="stylesheet" href="/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
        <!-- ENDS prettyPhoto -->
        
        <!-- poshytip -->
        <link rel="stylesheet" href="/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
        <link rel="stylesheet" href="/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
        <!-- ENDS poshytip -->
        
        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
        
        <!-- Flex Slider -->
        <link rel="stylesheet" href="/css/flexslider.css" >
        <!-- ENDS Flex Slider -->
        
        <!-- Masonry -->
        
        <!-- ENDS Masonry -->
        
        <!-- Less framework -->
        <link rel="stylesheet" media="all" href="/css/lessframework.css"/>
        
        <!-- modernizr -->
        
        <!-- SKIN -->
        <link rel="stylesheet" media="all" href="/css/skin.css"/>
        

    </head>
    
    <body lang="en">
    
        <header>
            <div class="wrapper clearfix">
                
                <div id="logo">
                    <a href="/"><img  src="/img/logo.png" alt="Simpler"></a>
                </div>
                
                <!-- nav  current-menu-item -->
                <ul id="nav" class="sf-menu">
                   <li class="{{$active['home']}}"><a href="/">HOME</a></li>

                    <li class="{{$active['blog']}}"><a href="/blog">BLOG</a></li>
                    <li class="{{$active['page']}}"><a href="/page">ABOUT</a>
                        <ul>
                            <li><a href="/page-elements">Elements</a></li>
                            <li><a href="/page-icons">Icons</a></li>
                            <li><a href="/page-typography">Typography</a></li>
                        </ul>
                    </li>
                    <li class="{{$active['portfolio']}}"><a href="/portfolio">WORK</a></li>
                    <li class="{{$active['contact']}}"><a href="/contact">CONTACT</a></li>

                    
                </ul>
                <!-- ends nav -->
                
                
                <!-- comboNav -->
                <select id="comboNav">
                    <option value="index" selected="selected">HOME</option>
                    <option value="blog">BLOG</option>
                    <option value="page">ABOUT</option>
                    <option value="page-elements">- Elements -</option>
                    <option value="page-icons">- Icons -</option>
                    <option value="page-typography">- Typography -</option>
                    <option value="portfolio">WORK</option>
                    
                </select>
                <!-- comboNav -->
                
