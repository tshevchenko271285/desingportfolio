<?php
//header("Cache-control: private");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desing Portfolio</title>
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

</head>
	<style type="text/css">
	</style>
<body>
<header id="header" class="header">
	<a class="logo" href="#">
		<span class="pe-7s-rocket"></span>
		<p>BOOSTFOLIA</p>
	</a>
	<div id="btn-menu" class="menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul id="menu" class="header-menu">
		<a href=""><li>Первое</li></a>
		<a href=""><li>Второе</li></a>
		<a href=""><li>Третье</li></a>
		<a href=""><li>Четвертое</li></a>
		<a href=""><li>Пятое</li></a>
	</ul>
</header>
<section class="big-slider">
<!-- Slider Swiper основной контейнер -->
	<div class="swiper-container" id="big-slider">
		<!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	        <!-- Slides -->
	        <div class="swiper-slide">
	        	<h1>WE THINK CREATIVE BE CREATIVE</h1>
				<h3>LIKE TO DO CREATIVE WORKS</h3>
				<div class="swiper-slide-image">
					<span class="swiper-slide-icon pe-7s-mouse"></span>
					<p>SCROLL DOWN</p>
				</div>
	        </div>
	        <div class="swiper-slide">
	        	<h1>WE THINK CREATIVE BE CREATIVE</h1>
				<h3>LIKE TO DO CREATIVE WORKS</h3>
				<div class="swiper-slide-image">
					<span class="swiper-slide-icon pe-7s-mouse"></span>
					<p>SCROLL DOWN</p>
				</div>
	        </div>
	        <div class="swiper-slide">
	        	<h1>WE THINK CREATIVE BE CREATIVE</h1>
				<h3>LIKE TO DO CREATIVE WORKS</h3>
				<div class="swiper-slide-image">
					<span class="swiper-slide-icon pe-7s-mouse"></span>
					<p>SCROLL DOWN</p>
				</div>
			</div>
	    </div>
	    <!-- Кнопки навигации -->
	</div>
	<div class="pe-7s-angle-left big-slider-left"></div>
	<div class="pe-7s-angle-right big-slider-right"></div>
</section>
<section class="about">
	<h2>ABOUT US</h2>
	<span class="line"></span>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	<div class="about-sections">
		<span class="about-section-icon pe-7s-paint"></span>
		<h4>CREATIVE DESIGN</h4>
		<p>Lorem ipsum dolor sit amet, consecte-tur adipisicing elit, sed do...</p>
	</div>
	<div class="about-sections">
		<span class="about-section-icon pe-7s-portfolio"></span>
		<h4>UNIQU PORTFOLIO</h4>
		<p>Lorem ipsum dolor sit amet, consecte-tur adipisicing elit, sed do...</p>
	</div>
	<div class="about-sections">
		<span class="about-section-icon pe-7s-loop"></span>
		<h4>INFINITE UPDATES</h4>
		<p>Lorem ipsum dolor sit amet, consecte-tur adipisicing elit, sed do...</p>
	</div>
</section>

<section class="video">
	<div class="video-left">
		<h3 class="h3-gray">WATCH BEHIND THE SCENE</h3>
		<p class="video-content">
			Lorem ipsum dolo the lorem r sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
		</p>
		<a class="btn video-content-btn" href="#">PLAY NOW</a>
	</div>
	<div class="video-right">
		<div class="video-right-icon pe-7s-play"></div>
		<img class="video-block" src="img/video_block.jpg" alt="">
	</div>
</section>
<section class="portfolio">
		<h2>OUR WORKS</h2>
		<div class="line"></div>
		<p class="portfolio-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		<ul class="portfolio-menu">
			<li><a href="">ALL PROJECTS</a></li>
			<li><a href="">PHOTOGRAPHY</a></li>
			<li><a href="">WEB DESIGN</a></li>
			<li><a href="">BRANDING</a></li>
			<li><a href="">MOBILE APP</a></li>
		</ul>
	<div class="portfolio-gallery"></div>
</section>
<section class="clients">
	<div class="swiper-container" id="clients">
		<div class="swiper-wrapper">
	        <!-- Slides -->
	        <div class="swiper-slide clientsSlide1"></div>
	        <div class="swiper-slide clientsSlide2"></div>
	        <div class="swiper-slide clientsSlide3"></div>
		</div>
	</div>
	<!-- Кнопки навигации -->
   <div class="pe-7s-angle-left slients-slider-left"></div>
   <div class="pe-7s-angle-right slients-slider-right"></div>
</section>

<section class="team">
	<h2>WHO WE ARE</h2>
	<div class="line"></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	<div class="swiper-container" id="team">
		<!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	        <!-- Начало слайда -->
	        <div class="swiper-slide">
				<div class="team-skills">
					<div class="team-skills-left">
						<div class="team-skills-left-circle"></div>
						<h4>JANE SMITH</h4>
						<p>DESIGNER</p>
						<div class="team-skills-social">
							<a href="" class="fa fa-behance" aria-hidden="true"></a>
							<a href="" class="fa fa-twitter" aria-hidden="true"></a>
							<a href="" class="fa fa-facebook-official" aria-hidden="true"></a>
						</div>
					</div>
					<div class="team-skills-right">
						<h4>MY SKILLS</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.nsectetur adipisicing elit, sed do eiusmod tempor.</p>
						<table id="progress-panel1" class="progress-panel">
							<tbody>
								<tr>
									<td>PHOTOSHOP</td>
									<td></td>
									<td>88%</td>
								</tr>
								<tr>
									<td>ILLUSTRATOR</td>
									<td></td>
									<td>92%</td>
								</tr>
								<tr>
									<td>SKETCH</td>
									<td></td>
									<td>90%</td>
								</tr>
								<tr>
									<td>AFTER EFFECTS</td>
									<td></td>
									<td>98%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
<!-- Конец слайда -->
<!-- Начало слайда -->
	        <div class="swiper-slide">
				<div class="team-skills">
					<div class="team-skills-left">
						<div class="team-skills-left-circle"></div>
						<h4>Timofey Shevchenko</h4>
						<p>DEVELOPMENT</p>
						<div class="team-skills-social">
							<a href="" class="fa fa-behance" aria-hidden="true"></a>
							<a href="" class="fa fa-twitter" aria-hidden="true"></a>
							<a href="" class="fa fa-facebook-official" aria-hidden="true"></a>
						</div>
					</div>
					<div class="team-skills-right">
						<h4>MY SKILLS</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.nsectetur adipisicing elit, sed do eiusmod tempor.</p>
						<table id="progress-panel2" class="progress-panel">
							<tbody>
								<tr>
									<td>PHOTOSHOP</td>
									<td></td>
									<td>15%</td>
								</tr>
								<tr>
									<td>ILLUSTRATOR</td>
									<td></td>
									<td>1%</td>
								</tr>
								<tr>
									<td>SKETCH</td>
									<td></td>
									<td>0%</td>
								</tr>
								<tr>
									<td>AFTER EFFECTS</td>
									<td></td>
									<td>2%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
<!-- Конец слайда -->
<!-- Начало слайда -->
	        <div class="swiper-slide">
				<div class="team-skills">
					<div class="team-skills-left">
						<div class="team-skills-left-circle"></div>
						<h4>John Smith</h4>
						<p>DEVELOPMENT</p>
						<div class="team-skills-social">
							<a href="" class="fa fa-behance" aria-hidden="true"></a>
							<a href="" class="fa fa-twitter" aria-hidden="true"></a>
							<a href="" class="fa fa-facebook-official" aria-hidden="true"></a>
						</div>
					</div>
					<div class="team-skills-right">
						<h4>MY SKILLS</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.nsectetur adipisicing elit, sed do eiusmod tempor.</p>
						<table id="progress-panel3" class="progress-panel">
							<tbody>
								<tr>
									<td>PHOTOSHOP</td>
									<td></td>
									<td>89%</td>
								</tr>
								<tr>
									<td>ILLUSTRATOR</td>
									<td></td>
									<td>76%</td>
								</tr>
								<tr>
									<td>SKETCH</td>
									<td></td>
									<td>28%</td>
								</tr>
								<tr>
									<td>AFTER EFFECTS</td>
									<td></td>
									<td>95%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
<!-- Конец слайда -->
		</div>	
    	<div class="swiper-pagination"></div>
	</div>
</section>

<section class="features">
	<h3 class="h3-dark-grey">SOME FEATURES</h3>
	<span class="line-grey"></span>
	<div class="features-block">
		<div class="feature-block">
			<div class="pe-7s-monitor icon"></div>
			<h4>Shortcodes</h4>
			<div class="features-item">46</div>
		</div>
		<div class="feature-block">
			<div class="icon pe-7s-settings"></div>
			<h4>Integrated Plugins</h4>
			<div class="features-item">128</div>
		</div>
		<div class="feature-block">
			<div class="icon pe-7s-shopbag"></div>
			<h4>Creative Products</h4>
			<div class="features-item">450</div>
		</div>
		<div class="feature-block">
			<div class="icon pe-7s-medal"></div>
			<h4>Clients Worldwide</h4>
			<div class="features-item">100+</div>
		</div>
	</div>
</section>

<section class="blogPosts">
	<h2>BLOG POSTS</h2>
	<div class="line"></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	<div class="post">
		<div class="post-image">
			<div class="pe-7s-link post-image-icon"></div>
			<div class="pe-7s-look post-image-icon"></div>
		</div>
		<div class="post-content">
			<h4>Make A Sleek Break</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="post-date">
				<span class="pe-7s-clock"></span>25 Jan 2015
			</div>
			<div class="post-like">
				<span class="pe-7s-like2"></span> 25
				<span class="pe-7s-comment"></span> 11
			</div>
		</div>
	</div>
	<div class="post">
		<div class="post-image">
			<div class="pe-7s-link post-image-icon"></div>
			<div class="pe-7s-look post-image-icon"></div>
		</div>
		<div class="post-content">
			<h4>Make A Sleek Break</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="post-date">
				<span class="pe-7s-clock"></span>25 Jan 2015
			</div>
			<div class="post-like">
				<span class="pe-7s-like2"></span> 25
				<span class="pe-7s-comment"></span> 11
			</div>
		</div>
	</div>
	<div class="post">
		<div class="post-image">
			<div class="pe-7s-link post-image-icon"></div>
			<div class="pe-7s-look post-image-icon"></div>
		</div>
		<div class="post-content">
			<h4>Make A Sleek Break</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="post-date">
				<span class="pe-7s-clock"></span>25 Jan 2015
			</div>
			<div class="post-like">
				<span class="pe-7s-like2"></span> 25
				<span class="pe-7s-comment"></span> 11
			</div>
		</div>
	</div>
</section>

<section class="prices">
	<h3 class="h3-dark-grey">CHOSE PLAN</h3>
	<span class="line-grey"></span>	
	<div class="price">
		<div class="price-header">
			<p>BASIC</p>
			<div class="price-dollars">Free</div>
		</div>
		<div class="price-content">
			<b>20</b> Pages<br>
			<b>2</b> GB Storage<br>
			<b>150</b> Members<br>
			<b>2</b> Contributors
			<button class="price-btn">PURCHASE</button>
		</div>
	</div>
	<div class="price">
		<div class="price-header">
			<p>STANDART</p>
			<div class="price-dollars">$24.00</div>
		</div>
		<div class="price-content">
			<b>25</b> Pages<br>
			<b>10</b> GB Storage<br>
			<b>300</b> Members<br>
			<b>5</b> Contributors
			<button class="price-btn">PURCHASE</button>
		</div>
	</div>
	<div class="price">
		<div class="price-header">
			<p>PREMIUM</p>
			<div class="price-dollars">$40.00</div>
		</div>
		<div class="price-content">
			<b>30</b> Pages<br>
			<b>20</b> GB Storage<br>
			<b>500</b> Members<br>
			<b>10</b> Contributors
			<button class="price-btn">PURCHASE</button>
		</div>
	</div>
	<div class="price">
		<div class="price-header">
			<p>PROFESSIONAL</p>
			<div class="price-dollars">$75.00</div>
		</div>
		<div class="price-content">
			<b>40</b> Pages<br>
			<b>40</b> GB Storage<br>
			<b>1000</b> Members<br>
			<b>20</b> Contributors
			<button class="price-btn">PURCHASE</button>
		</div>
	</div>
</section>

<section class="contacts">
	<h2>GET IN TOUCH</h2>
	<div class="line"></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	<form action="#" method="POST" name="send_massage">
		<div class="form-group">
			<label for="name">NAME <span>*</span></label>
				<input type="name" name="name" >			
		</div>
		<div class="form-group">
			<label for="email">MAIL <span>*</span></label>
				<input name="email" type="email">			
		</div>
		<div class="form-group">
			<label for="msg">MASSAGE <span>*</span></label>
				<textarea name="msg" rows="6"></textarea>
		</div>
		<button type="submit" class="contacts-btn">SEND MESSAGE</button>
	</form>
</section>
<section class="map">
	<div id="map-header" class="map-header">
		<p>LOCATE ON MAP<span class="pe-7s-angle-down"></span></p>
	</div>
	<img id="map" class="map-image" src="img/map.jpg" alt="Maps">
</section>

<footer class="footer">
	<span href="#" class="footer-logo pe-7s-rocket"></span>
	<h6>BOOSTFOLIA</h6>
	<p>MADE WITH LOVE BY CREATIVEPRODUCT</p>
	<div class="team-skills-social">
		<a href="" class="fa fa-behance" aria-hidden="true"></a>
		<a href="" class="fa fa-twitter" aria-hidden="true"></a>
		<a href="" class="fa fa-facebook-official" aria-hidden="true"></a>
	</div>
</footer>

<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="https://use.fontawesome.com/267e10208f.js"></script>
<script src="js/myFoo.js"></script>
<script type="text/javascript">
	window.onload = function(){
		mainMenu();
		bigHeadSlider();
		clientsSlider();
		progressPanel('#progress-panel1');
		progressPanel('#progress-panel2');
		progressPanel('#progress-panel3');
		teamSkillSlider();
	 	openMap();
	}
</script>
</body>
</html>