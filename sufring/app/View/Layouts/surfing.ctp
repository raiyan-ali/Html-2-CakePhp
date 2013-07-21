<!--<!DOCTYPE HTML>--> <?php echo $this->Html->docType('html5');?>

<html lang="en">
<head>
<title><?php echo Configure::read('sitetitle'); ?></title>
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
<?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic'); ?>

<?php echo $this->Html->css(array('reset', 'demo', 'calendar','custom_2','style')); ?>

<!--[if lt IE 9]>
<!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
-->
<?php echo $this->Html->script('//html5shiv.googlecode.com/svn/trunk/html5.js');?>
<![endif]-->

<!--<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/modernizr-latest.js" type="text/javascript"></script>-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
-->
<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');?>

<!------   Slide Java script ------>
	<!--<script src="js/slides.min.jquery.js"></script>-->
	<?php echo $this->Html->script('slides.min.jquery.js');?>

    <!--<script src="js/demofunction.js"></script>-->
	<?php echo $this->Html->script('demofunction.js');?>
    <!------   Calander Java script START ------>
    <script src="js/modernizr.custom.63321.js"></script>
		<?php echo $this->Html->script('modernizr.custom.63321.js');?>

<!--    	<script type="text/javascript" src="js/jquery.calendario.js"></script>-->	
	
<?php echo $this->Html->script('jquery.calendario.js');?>	
	
		<!--<script type="text/javascript" src="js/data.js"></script>-->
        
        <?php echo $this->Html->script('data.js');?>	
		
		<script type="text/javascript">	
			$(function() {
			
				var transEndEventNames = {
						'WebkitTransition' : 'webkitTransitionEnd',
						'MozTransition' : 'transitionend',
						'OTransition' : 'oTransitionEnd',
						'msTransition' : 'MSTransitionEnd',
						'transition' : 'transitionend'
					},
					transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
					$wrapper = $( '#custom-inner' ),
					$calendar = $( '#calendar' ),
					cal = $calendar.calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							if( $contentEl.length > 0 ) {
								showEvents( $contentEl, dateProperties );
							}

						},
						caldata : codropsEvents,
						displayWeekAbbr : true
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				// just an example..
				function showEvents( $contentEl, dateProperties ) {

					hideEvents();
					
					var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
						$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

					$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
					
					setTimeout( function() {
						$events.css( 'top', '0%' );
					}, 25 );

				}
				function hideEvents() {

					var $events = $( '#custom-content-reveal' );
					if( $events.length > 0 ) {
						
						$events.css( 'top', '100%' );
						Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

					}

				}
			
			});
		</script> <!------   Calander Java script END  ------>
		


</head>

<body>
<div id="wrapper">
<!-- start html block -->
    <header>
    	<h1 class="logo">
        <!--<a href="#"><img src="img/surfing_logo.png" alt="surfing_logo" title="Surfing_logo" width="283" height="65"/></a>-->
        <?php echo $this->Html->image('surfing_logo.png',array('alt'=>'surfing_Header_logo','url'=>'#'))?>
        </h1>
        <div class="joinus">
        <ul>
        	<li><!--<a href="#">Join us on Facebook<br><span class="keepup">and keep up to date with all the news</span></a>-->
            <?php echo $this->Html->link('Join us on Facebook','#', array('target' => '_blank'));?><br/>
           <?php /*?> <?php echo $this->Html->tag('span', 'and keep up to date with all the news', array('class' => 'keepup','url'=>'#'));?><?php */?>
           <?php /*?><?php echo $this->Html->link('and keep up to date with all the news','#', array('target' => '_blank','class' => 'keepup'));?><?php */?>
            <?php echo $this->Html->link($this->Html->tag('span', 'and keep up to date with all the news', array('class' => 'keepup')),'#',array('escape' => false));?>
            </li>
            
            <li><!--<a href="#"><img class="facebookicon" src="img/facebook_icon.png" alt="facebook_icon"/></a>-->
            <?php echo $this->Html->image('facebook_icon.png',array('alt'=>'facebook_icon','url'=>'#','class' => 'facebookicon'))?>
            </li>
        </ul>
        </div>
    </header>

    <nav>
        <ul class="main-nav">
            <li><!--<a href="#">HOME </a>-->
            <?php echo $this->Html->link('HOME','#');?>
            </li>
            <li><?php echo $this->Html->link('ABOUT','#');?></li>
            <li><?php echo $this->Html->link('RACE CALANDER','#');?></li>
        <!--<ul class="children">
            <li><a href="#">Child One</a></li>
            <li><a href="#">Child Two with child</a>
        <ul class="children">
            <li><a href="#">Child One</a></li>
            <li><a href="#">Child Two</a></li>
            <li><a href="#">Child Three</a></li>
        </ul>
        </li>
            <li><a href="#">Child Three</a></li>
        </ul>-->
            <li><?php echo $this->Html->link('CHAMPIONSHIP','#');?></li>
             <li><?php echo $this->Html->link('GALLERY','#');?></li>
              <li><?php echo $this->Html->link('BLOG','#');?></li>
        </ul>
    </nav>
	<section class="banner">
     <div id="slides">
        <div class="slides_container">
            <!--<a href="#" title="banner-1" target="_blank"><img src="img/slider_1.jpg" width="996" height="340" alt="Slide 1"></a>-->
            <?php echo $this->Html->link(
    		$this->Html->image("slider_1.jpg", array("alt" => "Slide 1",'width'=>'996','height'=>'340')),
			"#",array('escape' => false,'title'=>'banner-1','target'=>'_blank')); ?>
           <!-- <a href="#" title="banner-2" target="_blank"><img src="img/slider_1.jpg" width="996" height="340" alt="Slide 2"></a>
            <a href="#" title="banner-3" target="_blank"><img src="img/slider_1.jpg" width="996" height="340" alt="Slide 3"></a>-->
            <?php echo $this->Html->link(
    		$this->Html->image("slider_1.jpg", array("alt" => "Slide 1",'width'=>'996','height'=>'340')),
			"#",array('escape' => false,'title'=>'banner-2','target'=>'_blank')); ?>
            
             <?php echo $this->Html->link(
    		$this->Html->image("slider_1.jpg", array("alt" => "Slide 1",'width'=>'996','height'=>'340')),
			"#",array('escape' => false,'title'=>'banner-3','target'=>'_blank')); ?>
        </div>
   <!-- <a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>-->
     <?php echo $this->Html->link(
    		$this->Html->image("arrow-prev.png", array("alt" => "Arrow Prev",'width'=>'24','height'=>'43')),
			"#",array('escape' => false,'class'=>'prev')); ?>
            
    <!--<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>-->
    
    <?php echo $this->Html->link(
    		$this->Html->image("arrow-next.png", array("alt" => "Arrow Next",'width'=>'24','height'=>'43')),
			"#",array('escape' => false,'class'=>'next')); ?>
            
    </div>
    </section>

  <section class="content">
    
    <!-- post 1 -->
    <article class="post">
 		<div class="surfing-club">
        <h1 class="post-title">
        <!--<a href="#">Welcome to surfing club </a>-->
        <?php echo $this->Html->link('Welcome to surfing club', '#');?>
        </h1>
        <p class="postimg">
        <!--<a href="#"><img src="img/wecome_surf.jpg" alt="surfing-club" title="img-1"/></a>-->
        <?php echo $this->Html->image("wecome_surf.jpg", array("alt" => "surfing-club","title"=>"img-1","url"=>"#")); ?>
        </p>
        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua 
        <span class="more"> <!--<a href="#">[+more]</a> --> <?php echo $this->Html->link('[+more]', '#');?></span></p>
        </div> 
        <div class="about-club">
        <h1 class="post-title"><!--<a href="#">About Us</a>--> <?php echo $this->Html->link('About Us', '#');?> </h1>
        <p class="postimg"><!--<a href="#"><img src="img/about_surf.jpg" alt="surfing-club" title="img-1"/></a>-->
          <?php echo $this->Html->link($this->Html->image("about_surf.jpg", array("alt" => "surfing-club",'title'=>'img-1')),"#",array('escape' => false)); ?>
        </p>  
           <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <span class="more"><?php echo $this->Html->link('[+more]', '#');?>></span></p>
        </div>
        <div class="events-club">
        <h1 class="post-title"><!--<a href="#">Our Events</a>--><?php echo $this->Html->link('Our Events', '#');?></h1>
        <p class="postimg"><!--<a href="#"><img src="img/events_surf.jpg" alt="surfing-club" title="img-1"/></a>-->
        <?php echo $this->Html->link(
    		$this->Html->image("events_surf.jpg", array("alt" => "surfing-club",'title'=>'img-1')),
			"#",array('escape' => false)); ?>
        </p>     <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <span class="more"><?php echo $this->Html->link('[+more]', '#');?></span></p>
        </div>      
    </article>
    <!-- end post 1 -->
    
    <!-- post 1 -->
    <article class="post">
    <div class="post-inner">
	<div class="latest-news">
        <h1 class="text-title"><!--<a href="#">Latest News</a>--><?php echo $this->Html->link('Latest News', '#');?></h1>
        <div class="latest-inner">
        <div class="dated-img">
        	<!--<a href="#"><img src="img/latestnews_1.jpg" alt="img-1" title="img" width="124" height="124"/></a>-->
              <?php echo $this->Html->link(
    		$this->Html->image("latestnews_1.jpg", array("alt" => "img-1",'title'=>'img','width'=>'124','height'=>'124')),"#",array('escape' => false)); ?>
        </div>
        <div class="dated">
        <h4 class="date-title"><!--<a href="#">L15 Mar, 2013</a>--><?php echo $this->Html->link('L15 Mar, 2013', '#');?></h4>
        <p class="date-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        </div>
       <div class="latest-inner">
        <div class="dated-img">
        	<!--<a href="#"><img src="img/latestnews_1.jpg" alt="img-1" title="img" width="124" height="124"/></a>-->
            <?php echo $this->Html->link(
    		$this->Html->image("latestnews_1.jpg", array("alt" => "img-1",'title'=>'img','width'=>'124','height'=>'124')),"#",array('escape' => false)); ?>
        </div>
        <div class="dated">
        <h4 class="date-title"><?php echo $this->Html->link('L15 Mar, 2013', '#');?></h4>
        <p class="date-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        </div> 
        <div class="latest-inner">
        <div class="dated-img">
        	<?php echo $this->Html->link(
    		$this->Html->image("latestnews_1.jpg", array("alt" => "img-1",'title'=>'img','width'=>'124','height'=>'124')),"#",array('escape' => false)); ?>
        </div>
        <div class="dated">
        <h4 class="date-title"><?php echo $this->Html->link('L15 Mar, 2013', '#');?></h4>
        <p class="date-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        </div>
              <p class="seeallnews"><!--<a href="#">See all news</a>-->
			  <?php echo $this->Html->link('See all news', '#');?></p>
        </div>
        <div class="chempion-news">
        <h1 class="text-title"><?php echo $this->Html->link('Championship', '#');?>
        <!--<a href="#">Championship</a>-->
        </h1> 
        <div class="chempion-news-inner">   
        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
	<h2 class="peoplesay">People say</h2>
    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<h3 class="deatils"><a href="#">- Set magna ipsum dolo</a></h3>
        </div>
        </div>
        <div class="clendar-news">
        <h1 class="text-title"><a href="#">Calendar</a></h1> 
        <div class="clendar-news-inner">   

			<section class="main">
				<div class="custom-calendar-wrap">
					<div id="custom-inner" class="custom-inner">
						<div class="custom-header clearfix">
							<nav>
								<span id="custom-prev" class="custom-prev"></span>
								<span id="custom-next" class="custom-next"></span>
							</nav>
							<h2 id="custom-month" class="custom-month"></h2>
							<h3 id="custom-year" class="custom-year"></h3>
						</div>
						<!--<div id="calendar" class="fc-calendar-container"></div>-->
                        <?php echo $this->Html->div('fc-calendar-container','',array('id'=>'calendar')); ?>
					</div>
				</div>
			</section>

        </div>
        </div>
        </div>
    </article>
    <!-- end post 1 -->

 </section>
    <footer>
        <div class="footer-left">
        <ul class="footer-nav">
               <li> <?php echo $this->Html->link('HOME','#');?> </li>
            <li><?php echo $this->Html->link('ABOUT','#');?></li>
            <li><?php echo $this->Html->link('RACE CALANDER','#');?></li>
            <li><?php echo $this->Html->link('CHAMPIONSHIP','#');?></li>
             <li><?php echo $this->Html->link('GALLERY','#');?></li>
              <li><?php echo $this->Html->link('BLOG','#');?></li>
        </ul>
        </div>
        <div class="footer-right">
         <?php echo $this->Html->link('Liveoutsource Ltd.','#');?> - <?php echo $this->Html->link('Privacy Policy','#');?>
        <!--<a href="#">Liveoutsource Ltd.</a> - <a href="#">Privacy Policy</a>--></div>
    </footer>

<!-- end html block -->

</div>
</body>
		<?php echo $this->Js->writeBuffer();?>

</html>