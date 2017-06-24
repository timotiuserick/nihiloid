<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>

		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

		<link rel="stylesheet" href="css/animate.css">
		<script src="js/wow.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
			wow = new WOW(
			{
			boxClass:     'wow', 
			animateClass: 'animated',
			offset:       100
			}
			);
			wow.init();
		</script>

		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	    <script src="js/jssor.slider-23.1.3.mini.js" type="text/javascript"></script>
	    <script type="text/javascript">
	        jQuery(document).ready(function ($) {

	            var jssor_1_SlideoTransitions = [
	              [{b:900,d:2000,x:-379,e:{x:7}}],
	              [{b:900,d:2000,x:-379,e:{x:7}}],
	              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
	            ];

	            var jssor_1_options = {
	              $AutoPlay: 1,
	              $SlideDuration: 800,
	              $SlideEasing: $Jease$.$OutQuint,
	              $CaptionSliderOptions: {
	                $Class: $JssorCaptionSlideo$,
	                $Transitions: jssor_1_SlideoTransitions
	              },
	              $ArrowNavigatorOptions: {
	                $Class: $JssorArrowNavigator$
	              },
	              $BulletNavigatorOptions: {
	                $Class: $JssorBulletNavigator$
	              }
	            };

	            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	            /*responsive code begin*/
	            /*remove responsive code if you don't want the slider scales while window resizing*/
	            function ScaleSlider() {
	                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
	                if (refSize) {
	                    refSize = Math.min(refSize, 1920);
	                    jssor_1_slider.$ScaleWidth(refSize);
	                }
	                else {
	                    window.setTimeout(ScaleSlider, 30);
	                }
	            }
	            ScaleSlider();
	            $(window).bind("load", ScaleSlider);
	            $(window).bind("resize", ScaleSlider);
	            $(window).bind("orientationchange", ScaleSlider);
	            /*responsive code end*/
	        });
	    </script>

	</head>

	<body>
		<?php include'navigasi.php'?>

		<div id="top" class="container">

			<div class="section-services">
				<br><br><br>
					<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-20px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
				        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
				            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
				        </div>
				        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
				            <!-- <div>
				                <img data-u="image" src="images/red.jpg" />
				                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">TOUCH SWIPE SLIDER</div>
				                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
				                <div style="position:absolute;top:120px;left:650px;width:470px;height:220px;z-index:0;">
				                    <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;z-index:0;" src="images/c-phone-horizontal.png" />
				                    <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0; overflow:hidden;">
				                        <img data-u="caption" data-t="0" style="position:absolute;top:0px;left:0px;width:379px;height:213px;z-index:0;" src="images/c-slide-1.jpg" />
				                        <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:379px;width:379px;height:213px;z-index:0;" src="images/c-slide-3.jpg" />
				                    </div>
				                    <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0;" src="images/c-navigator-horizontal.png" />
				                    <img data-u="caption" data-t="2" style="position:absolute;top:476px;left:454px;width:63px;height:77px;z-index:0;" src="images/hand.png" />
				                </div>
				            </div> -->
				            <div>
				                <img data-u="image" src="images/about/service1-1.jpg" />
				            </div>
				            <div>
				                <img data-u="image" src="images/about/service2-1.jpg" />
				            </div>
				        </div>

				        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
				            <div data-u="prototype" style="width:16px;height:16px;"></div>
				        </div>

				        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
				        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
				    </div>

				    <div class="services-wap">
						<div class="wow slideInRight" data-wow-duration="1s" >
							<div class="services-wap-image">
								<img src="images/about/service1-2.jpg">
							</div>
			            </div>
			            <div class="wow slideInRight" data-wow-duration="1s" >
							<div class="services-wap-image">
								<img src="images/about/service2-2.jpg">
							</div>
			            </div>
			        </div>
			</div>

			<div class="cover">
				<div class="logo">
					<a href="#about"><img class="logo-content" src="images/about/logo.png"></a>
				</div>
			</div>


			<header>
					<nav class="nav" id="wap-menu">
						<div class="nav-bar">
						  	<ul>
								<li><a href="#portfolio">GALLERY<br /> </a></li>
								<li><a href="#about">COMPANY<br /> </a></li>
								<li><a href="#services">SERVICES<br /> </a></li>
								<li><a href="#contact">CONTACT<br /> </a></li>
							</ul>
					</nav>
			</header>

			<header id="portfolio" class="clearfix">
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<div class="gamma-container gamma-loading" id="gamma-container">

				<ul class="gamma-gallery">

					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/16.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/1.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03"  data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/2.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03"  data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/3.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/4.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/5.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/6.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/7.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/8.png"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/9.png"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/10.png"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/11.png"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/12.png"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/13.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/14.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/15.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/17.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/18.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/19.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/20.jpg"></div>
						</div>
					</li>
					<li>
						<div data-alt="img03" data-max-width="1800" data-max-height="1350">
							<div data-src="images/portfolio/21.png"></div>
						</div>
					</li>
					
				</ul>

				<div class="gamma-overlay"></div>

				<!-- <div id="loadmore" class="loadmore">Example for loading more items...</div> -->

			</div>

			<div class="section-about" id="about">
				<div class="section-about-1" id="about">
					<br><br><br>
					<h1>
						COMPANY
					</h1>
					<br><br>
					<div class="section-about-web">
						<div class="cf-2">
							<img class="top" src="images/about/1-1.jpg" />
							<div class="section-about-team">
							<h3>ABOUT US</h3><br><br>
								NIHILO Design Studio is a game art outsourcing company<br>
								that produces gaming assets from the designing stage (2D Concept)<br>
								to finished 3D product, with AAA quality and efficient price. <br><br>
								 NIHILO plays an active role as a partner in developing your IP<br> 
								 by providing the best services for advancement.<br><br>

	NIHILO formed by people who have a passion for digital art <br>
	and is committed to giving positive value<br>
	 to the progress of creative industry through digital visual entertainment services<br> 
	 from primary to advance especially concept art, visual effects, from 2D to 3D animation.
							</div>
							
						</div>
						<div class="cf-2">
							<img class="top" src="images/about/2-1.jpg" />
							<div class="section-about-vision">
								<h3>WHO WE ARE</h3><br><br>
	NIHILO was founded by Matthew as an artist with experience in leading Digital Art Company in Malaysia. Starting from a simple work to a serious collaborate with the AAA scale, he decided to form a team with the same spirit of providing the best service for the development of visual art entertainment aboard.<br><br>
	NIHILO means nothingness. We believe that creativity can bring awesomeness out of scratch, just as our God created the universe out of nothing.
							</div>
						</div>
						<div class="cf-2">
							<img class="top" src="images/about/3-1.jpg" />
							<div class="section-about-team">
								<h3>OUR CULTURE</h3><br>
	As a team. we are always thisty to learn and grow with the creative companies we handle. Our success is when our clients achieve their success.<br><br>
	"Survival takes (a little) courage and (much) creativity."
	<br><br>
	<h3>VISION</h3><br>
	To be the best partner in the creative industry through remarkable services, efficient pricing, and great quality to create creative culture that gives positive impact to the society.
								<br>
								<!-- <div style="text-align: left;display: inline-block;">
									 To fulfill client needs and wants through high quality and innovative design works.
									<br>
									 To be a reliable partner through responsible and efficient services.
									<br>
									 To utilize the best technologies available to achieve the best result possible.
								</div> -->
							</div>
						</div>
					</div>
					<div class="section-about-wap">
						<div class="cf-2">
							<img class="top" src="images/about/1-2.jpg" />
							<div class="section-about-content-wap">
								<h3>ABOUT US</h3><br><br>
								NIHILO Design Studio is a game art outsourcing company that produces gaming assets from the designing stage (2D Concept) to finished 3D product, with AAA quality and efficient price. <br><br>
								 NIHILO plays an active role as a partner in developing your IP by providing the best services for advancement.<br><br>

	NIHILO formed by people who have a passion for digital art and is committed to giving positive value to the progress of creative industry through digital visual entertainment services from primary to advance especially concept art, visual effects, from 2D to 3D animation.
							</div>
						</div>
						<div class="cf-2">
							<img class="top" src="images/about/2-2.jpg" />
							<div class="section-about-content-wap">
								<h3>WHO WE ARE</h3><br><br>
	NIHILO was founded by Matthew as an artist with experience in leading Digital Art Company in Malaysia. Starting from a simple work to a serious collaborate with the AAA scale, he decided to form a team with the same spirit of providing the best service for the development of visual art entertainment aboard.<br><br>
	NIHILO means nothingness. We believe that creativity can bring awesomeness out of scratch, just as our God created the universe out of nothing.
							</div>
						</div>
						<div class="cf-2">
							<img class="top" src="images/about/3-2.jpg" />
							<div class="section-about-content-wap">
								<h3>OUR CULTURE</h3><br>
	As a team. we are always thisty to learn and grow with the creative companies we handle. Our success is when our clients achieve their success.
	<br><br><br><br>
	<h3>VISION</h3><br>
	To be the best partner in the creative industry through remarkable services, efficient pricing, and great quality to create creative culture that gives positive impact to the society.
							</div>
						</div>
					</div>
				</div>
			</div>


			<script>
				function show(id) {
					// elements = document.getElementsByClassName('section-about-member-info');console.log(elements);
					// for (var i=0; i< elements.length; i++) {
					// 	elements[i].style.display = 'none';
					// }
					// $("#" + id).animate({height: 'toggle'});
				}
			</script>

			<div class="section-about-members">
				<h1>CORE TEAM</h1><br><br>
				<div class="section-about-members-row">
					<img class="section-about-member" src ="images/about/a.jpg" onclick="show('matt');">
					<img class="section-about-member" src ="images/about/b.jpg" onclick="show('alfred');">
					<img class="section-about-member" src ="images/about/c.jpg" onclick="show('aris');">
				</div>

				<div class="section-about-member-info" id="matt">
				VINCENTIUS MATTHEW<br><br>
				President and Art Director<br>
Armed with illustration and entertainment design education at The One Academy, Matthew began his career as a concept artist at one of a leading game developer company in Malaysia, where he handled several AAA projects. Afterwards he became an independent concept artist. 
				</div>
				<div class="section-about-member-info" id="alfred">
				ALFRED HENZA<br><br>
				Marketing and Project Development<br>
Alfred began his career as a sales marketing and distribution management in a clothing company. He then decided to study business in art and design to follow his calling, taking it to professional level. As an marketing and project development, he has full responsibilities for managing production flow.
				</div>
				<div class="section-about-member-info" id="aris">
				ARISTYO SUDARNOTO<br><br>
Creative Designer and 3D Artist<br>
Aris studied Graphic Design in Multimedia Nusantara University. His passion for gaming makes him diligently developing his skillset in 3D modeling in his younger age. He’s always challenging himself to learn new workflows to speed up his creative process.
				</div>
				<div class="section-about-member-info" id="erick">
				TIMOTIUS ERICK<br><br>
3D Artist<br>
Erick began his career as a programmer at one of the major IT companies in Indonesia. He decided to pursue a career of becoming a professional 3D Artist in the gaming and animation industry, as he knew that game is always part of his life.
				</div>
				<div class="section-about-member-info" id="eva">
				Ai Nanaevania<br>
???
				</div>
				<br>
				<div class="section-about-members-row">
					<img class="section-about-member" src ="images/about/d.jpg" onclick="show('erick');">
					<img class="section-about-member" src ="images/about/e.jpg" onclick="show('eva');">
				</div>
			</div>

			<div class="section-about-members-wap">
				<h1>CORE TEAM</h1><br><br>
				<img class="section-about-member" src ="images/about/a.jpg">
				<img class="section-about-member" src ="images/about/b.jpg">
				<img class="section-about-member" src ="images/about/c.jpg">
				<img class="section-about-member" src ="images/about/d.jpg">
				<img class="section-about-member" src ="images/about/e.jpg">
			</div>

			<div class="section-member-working">
				<img class="section-member-working-img" src="images/about/work1.jpg">
				<img class="section-member-working-img" src="images/about/work2.jpg">
				<img class="section-member-working-img" src="images/about/work3.jpg">
			</div>


			<div class="main">

		
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
				<script src="js/jquery.masonry.min.js"></script>
				<script src="js/jquery.history.js"></script>
				<script src="js/js-url.min.js"></script>
				<script src="js/jquerypp.custom.js"></script>
				<script src="js/gamma.js"></script>
				<script type="text/javascript">
					
					$(function() {

						var GammaSettings = {
								// order is important!
								viewport : [ {
									width : 1200,
									columns : 5
								}, {
									width : 900,
									columns : 4
								}, {
									width : 500,
									columns : 3
								}, { 
									width : 320,
									columns : 2
								}, { 
									width : 0,
									columns : 2
								} ]
						};

						Gamma.init( GammaSettings, fncallback );


						// Example how to add more items (just a dummy):
						var page = 0,
							items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/4.jpg"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/5.jpg"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/8.png"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/10.png"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/11.png"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/4.jpg"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/5.jpg"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/8.png"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/10.png"></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/portfolio/11.png"></div></li>']

						function fncallback() {

							$( '#loadmore' ).show().on( 'click', function() {

								++page;
								var newitems = items[page-1]
								if( page <= 1 ) {
									
									Gamma.add( $( newitems ) );

								}
								if( page === 1 ) {

									$( this ).remove();

								}

							} );

						}

					});

				</script>


				


			<br><br><br><br>
			<h1 id="contact" style="padding: 0 25px; text-align: center;">CONTACT</h1><br><br>
			<div class="section-contact-content-web">
				<div class="section-contact-left">
					<div class="section-contact">
				    	<br>Contact us at :<br><br>
				    	<div class="sosmed">
				    		<div class="sosmed-img">
				    			<img width="30" height="30" src="images/mail.png">
				    		</div>
				    		<b>nihilodesignstudio@gmail.com</b><br>
				    	</div>
				    	<div class="sosmed">
				    		<div class="sosmed-img">
				    			<img width="30" height="30" src="images/insta.png">
				    		</div>
				    		<b>@nihilodesignstudio</b>
				    	</div>

				    	<br><br><br><br><br><br><br><br>We are always pleased to discuss possible projects or <br>
				    	answer any questions about our organization. 
				    </div>
				</div>
				<div class="section-contact-right">
					<div id="map1" class="map"></div>
				</div>
			</div>

			<div class="section-contact-content-wap">
				<div id="map2" class="map"></div>
				<div class="section-contact">
			    	<br>Contact us at : <br><br>
			    	<div class="sosmed">
				    		<div class="sosmed-img">
				    			<img width="30" height="30" src="images/mail.png">
				    		</div>
				    		<b>nihilodesignstudio@gmail.com</b>
				    	</div>
				    	<div class="sosmed">
				    		<div class="sosmed-img">
				    			<img width="30" height="30" src="images/insta.png">
				    		</div>
				    		<b>@nihilodesignstudio</b>
				    	</div>
			    	<br><br><br><br><br><br><br>We are always pleased to discuss possible projects or <br>
			    	answer any questions about our organization. 
			    </div>
			</div>
			
		    <script>
		      function initMap() {
		        var uluru = {lat: -6.25432531, lng: 106.61640436};
		        var map = new google.maps.Map(document.getElementById('map1'), {
		          zoom: 15,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });

		        var map = new google.maps.Map(document.getElementById('map2'), {
		          zoom: 15,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		    </script>
		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtHn01QjEDh-jciS9jBuI1ghJvIcqw00s&callback=initMap">
		    </script>

		   </div> 
		    
			<footer class="footer-basic-centered">

				<p class="footer-company-motto">"SURVIVAL TAKES (A LITTLE) COURAGE AND (MUCH) CREATIVITY"</p>

				<p class="footer-links">
					<a href="#portfolio">Gallery</a>
					·
					<a href="#about">Company</a>
					·
					<a href="#services">Services</a>
					·
					<a href="#contact">Contact</a>
				</p>

				<p class="footer-company-name">Nihilo &copy; 2017</p>

			</footer>
		</div>
	</body>
</html>
