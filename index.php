<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home | Merry-Go-Round</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
	<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

<!--Google Analytics Designmaz-->
<!---<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>---></head>
<body>
	<!--start-home-->
	<div id="home" class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><h1>MerryGo<span>Round</span></h1></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
				<ul class="cl-effect-16">
						<li><a href="index.html" data-hover="Home">Home</a></li> 
						<li><a href="about.html" data-hover="About">About</a></li>
						<li><a href="gallery.html" data-hover="Places to visit">Places to visit</a></li>
						<li><a href="blog.html" data-hover="Stories">Stories</a></li>
					
					</ul>
				</div>
                
                <div class="top_right">
                    <?php
                if(isset($_SESSION["username"]))
                {echo "Welcome ".$_SESSION["username"];}
                    else{ echo '<a href="signup.php" >Sign up</a>&nbsp&nbsp<a href="signin.php" >Sign in</a>';}
                ?>
			    </div>

			<!-- script-for-menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
						<div class="clearfix"></div>
	<!--End-top-nav-script-->
			</div>
		</div>
	<div class="banner">
	     	<div class="container">
					<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					
						</ul>
					</div>
					<!--banner-->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			</div>
		 </div>
</div>
		<!--top-places-->
		  <!-- <div class="top-places">
		     <div class="container">
			     <h3 class="tittle">Top Places</h3>
			    <div class="tip-main">
			      <div class="col-md-4 top-grid">
					 <img src="images/top-p.jpg" alt="image"/>
					 <h4>Family Travel</h4>
					 <p>Places to travel along with your family </p>
				  </div>		
				    <div class="col-md-4 top-grid">
					 <img src="images/top-p1.jpg" alt="image"/>
					 	 <h4>Honeymoon Package</h4>
						  <p>Great packages for newly-weds! </p>
				  </div>	
				   <div class="col-md-4 top-grid">
					 <img src="images/top-p2.jpg" alt="image"/>
					 	 <h4>Group Travel</h4>
						  <p>Best locations for group travel. </p>
				  </div>	
					<div class="clearfix"> </div>				
				</div>
			</div>
	     </div>-->
	<!--start-welcome-->
		
					<div class="video-text">
						<h2>Welcome to Merry-Go-Round</h2>
						<p>An all in one travelling website for all the travellers out there.</p>
					</div>
						<div class="clearfix"> </div>
									
		
		<!--//end-welcome-->
	<!--start-services-->
<!-- service-type-grid -->
	<div class="service-type-grid">
		<div class="container">
		    <h3 class="tittle">Our Services</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="service-type-grd-info">
							  
								 <div class="col-md-6 service-type-main">
										<div class="service-type-grd-left">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
											<h5>Best Food</h5>
										</div>
										<div class="service-type-grd-left">
											<img src="images/6.jpg" alt=" " class="img-responsive" />
											<h5>Best Beach</h5>
										</div>
										<div class="service-type-grd-left">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
											<h5>Best Rooms</h5>
										</div>
								     </div>
									<div class="col-d-6 service-type-grd-right">
										<h3>Enjoy your Trip</h3>
										<h4 style="color:#F4F6F6;">Merry-Go-Round will take you to amazing places</h4>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
						</li>
						<li>
							<div class="service-type-grd-info">
							  
								 <div class="col-md-6 service-type-main">
										<div class="service-type-grd-left">
											<img src="images/6.jpg" alt=" " class="img-responsive" />
											<h5>Best Beach</h5>
										</div>
										<div class="service-type-grd-left">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
											<h5>Best Rooms</h5>
										</div>
										<div class="service-type-grd-left">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
											<h5>Best Food</h5>
										</div>
								     </div>
								<div class="col-d-6 service-type-grd-right">
										<h3>Enjoy your Trip</h3>
										<h4 style="color:#F4F6F6;">Merry-Go-Round will take you to amazing places </h4>
										<p><p>
									</div>
									<div class="clearfix"> </div>
								</div>
						</li>
						<li>
							<div class="service-type-grd-info">
							  
								 <div class="col-md-6 service-type-main">
										<div class="service-type-grd-left">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
											<h5>Best Rooms</h5>
										</div>
										<div class="service-type-grd-left">
											<img src="images/6.jpg" alt=" " class="img-responsive" />
												<h5>Best Beach</h5>
										</div>
										<div class="service-type-grd-left">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
											<h5>Best Food</h5>
										</div>
								     </div>
								<div class="col-d-6 service-type-grd-right">
										<h3>Enjoy your Trip</h3>
										<h4 style="color:#F4F6F6;">Merry-Go-Round will take you to amazing places </h4>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
						</li>
					</ul>
				</div>
			</section>
			<!--FlexSlider-->
						<script defer src="js/jquery.flexslider.js"></script>
							<script type="text/javascript">
									$(function(){
									  SyntaxHighlighter.all();
									});
									$(window).load(function(){
									  $('.flexslider').flexslider({
										animation: "slide",
										start: function(slider){
										  $('body').removeClass('loading');
										}
									  });
									});
					</script>
			<!--End-slider-script-->
		</div>
	</div>
<!-- //service-type-grid -->
<!--start-blog-->
		<div id="blog" class="blog-section">
		   <div class="container">
		         <h3 class="tittle">Stories</h3>
				 <div class="blog">
				   <div class="col-md-4 blog-text">
					   <h5>Sun 30 Aug, 2015</h5>
					   <a href="single.html"><h4>A lone traveller went on a long bike ride.</h4></a>
					   <p>Using Merry-Go-Round a college student went on a road trip alone. His experiences will make you want to do the same.</p>
				   </div>
					<div class="col-md-8 welcome-img">
					 <a href="single.html" class="mask"><img src="images/b1.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
			    <div class="blog">
				 <div class="col-md-4 blog-text two">
					   <h5>Thu 15 Sep, 2015</h5>
					  <a href="single.html"><h4>Foreigners coming into the country</h4></a>
					   <p>Using Merry-Go-Round foreigners coming into the country travelled peacefully without any hesitation. Know more here.</p>
				   </div>
					<div class="col-md-8 blog-img two">
					 <a href="single.html" class="mask"><img src="images/b2.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div> 
			    <div class="blog">
				   <div class="col-md-4 blog-text">
					   <h5>Fri 14 Dec, 2015</h5>
					   <a href="single.html"><h4>Trekking Tales</h4></a>
					   <p>Know the exciting stories of friends going on treks.</p>
				   </div>
					<div class="col-md-8 welcome-img">
					 <a href="single.html" class="mask"><img src="images/b3.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
		</div>
	</div>
	<!--//blog-->
	<!--/destinations-->
	<div class="destination">
	   <div class="container">
		         <h3 class="tittle">Destinations</h3>
				 <p>We have a database of almost all the destinations and tourist spots across the country</p>
		
		</div>
		<section class="cr-container">				
				<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
				<label for="select-img-1" class="cr-label-img-1">1</label>
				
				<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
				<label for="select-img-2" class="cr-label-img-2">2</label>
				
				<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
				<label for="select-img-3" class="cr-label-img-3">3</label>
				
				<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
				<label for="select-img-4" class="cr-label-img-4">4</label>
				
				<div class="clearfix"></div>	
				<div class="cr-bgimg">
					<div>
						<span>Slice 1 - Image 1</span>
						<span>Slice 1 - Image 2</span>
						<span>Slice 1 - Image 3</span>
						<span>Slice 1 - Image 4</span>
					</div>
					<div>
						<span>Slice 2 - Image 1</span>
						<span>Slice 2 - Image 2</span>
						<span>Slice 2 - Image 3</span>
						<span>Slice 2 - Image 4</span>
					</div>
					<div>
						<span>Slice 3 - Image 1</span>
						<span>Slice 3 - Image 2</span>
						<span>Slice 3 - Image 3</span>
						<span>Slice 3 - Image 4</span>
					</div>
					<div>
						<span>Slice 4 - Image 1</span>
						<span>Slice 4 - Image 2</span>
						<span>Slice 4 - Image 3</span>
						<span>Slice 4 - Image 4</span>
					</div>
				</div>
				<div class="cr-titles">
					<h3><span>Enjoy</span><span>What you've been dreaming of</span></h3>
					<h3><span>Adventure</span><span>Where the fun begins</span></h3>
					<h3><span>Nature</span><span>Unforgettable eperiences</span></h3>
					<h3><span>Serenity</span><span>When silence touches nature</span></h3>
				</div>
			</section>
       </div>
		<!--testimonials-->
		<div class="testimonials" id="test">	
			<div class="container">
				<h3 class="tittle three" style="color:#2E4053;">Feedback</h3>
						<div class="testi-text">
								<div class="testi-img">
									<img src="images/client2.jpg" alt=""/>
								</div>
								<h4>Sukhjeet</h4>
								<p><span> </span>With the help of Merry-Go-Round I got to travel around India without any fear. With their help I felt like I had a companion even when I was alone..</p>								
						</div>
					</div>
				</div>
		<!--//testimonials-->
		<!--contact-->
		<div class="contact" id="contact">
			<div class="container">
			 <h3 class="tittle">Newsletter</h3>
				<div class="newslatter">
					<ul class="f-icons second">
					<li><a href="#" class="facebook"> </a></li>
				    <li><a href="#" class="p"> </a></li>
					<li><a href="#" class="twitter"> </a></li>
					</ul>
							<div class="clearfix"></div>
							<div class="support">
							   <input type="text" class="text" value="Enter email..." onfocus="this.value = '';" onblur="if (this.value == 'Enter email...') {this.value = 'Enter email...';}">
							   <input type="submit" value="SUBSCRIBE" class="botton" style="background-color:#3498DB">
							</div>

				   </div>
	        </div>
	    </div>
	<!--map-->
    <div class="map">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675115.8258740564!2d-98.4671417929578!3d34.91371150021706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1434956093308"></iframe>
		<span> </span>

	</div>
	<!--/footer-->
		<div class="copy">
		    <p>&copy; 2017 Merry-Go-Round. All Rights Reserved | Created by Aniruddha R. Iyer, Abhishek Joshi, Dixon Jose, Sukhjeet Singh Gulati</a> </p>
		</div>
		<!--//footer-->
			<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>