<?php include ROOT. '/views/lasertaq/head.php'; ?>

	 
	
	  <!-- Welcome Section -->
	<section class="welcome-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-laser centered">
				<div class="title">Почему</div>
				<h2> Лазертаг это так круто?</h2>
			</div>
			
			<div class="row clearfix">
				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/8.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Крутая <br> экипировка</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>

	<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/7.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Свежий<br>воздух</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/5.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Безопасно <br>  </a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/6.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Очень много<br>квестов!</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- Lower Box -->
			<div class="lower-box">
				<div class="text">Здесь вас ждут захватывающие командные сражения в реальном времени с реальными соперниками! Море спец эффектов, высокотехнологичное оружие, крутая экипировка, неоновые огни - все для полного погружения в космическую атмосферу! Никто не останется равнодушным!</div>
				<!--a href="about-clan.html" class="theme-btn btn-style-laser"><span class="btn-title">About us</span></a-->
			</div>
			
		</div>
	</section>
	<!-- End Welcome Section -->
<!-- Gallery Section Two -->
		<section class="gallery-section-two">
	
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-laser centered">
				<div class="title"></div>
				<h2>Наш Лазертаг - Полигон!</h2>
			</div>
			
			<div class="row clearfix">
			<?php foreach ($photoLasertag as $photo): ?>
				<!--Gallery Item-->
				<div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
					<div class="inner-box">
						<figure class="image-box">
							 <img src="<?php echo Gallery::getImage($photo['id']); ?>" alt="" class="current">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										
										<a href="<?php echo Gallery::getImage($photo['id']); ?>" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-add"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				<?php endforeach; ?>
				
				
			</div>
			
		</div>
		
	</section>
	<!-- Gallery Section -->
		<!-- Call To Action Section -->
		<!-- Call To Action Section -->
	<section class="facts-section">
		<!-- Title Boxed -->
		<div class="title-boxed" style="background-image:url(views/lasertaq/images/background/5.jpg)">
			
		  </div>
		  </section>  

		<!-- Welcome Section Two -->
	<section class="welcome-section-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Counter Column -->
					<div class="counter-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-star" style="color:green !important;"></span>
									</div>
									<h3>Гриль домик</h3>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-joystick" style="color:green !important;"></span>
									</div>
									<h3>Много сценариев</h3>
									<div class="text"> </div>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-success-1" style="color:green !important;"></span>
									</div>
									<h3>Веревочный парк</h3>
								</div>
							</div>
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-man" style="color:green !important;"></span>
									</div>
									<h3>Аниматоры</h3>
								</div>
							</div>
							
						</div>
					</div>
					
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
						<!-- Sec Title -->
						<div class="sec-title-laser">
							<div class="title"></div>
							<h2>Приветствуем вас <br> в Лазертаг клубе АДРЕНАЛИН!</h2>
						</div>
						<div class="text"></div>
						<!--a href="#" class="theme-btn btn-style-laser"><span class="btn-title">Learn More</span></a>
					</div>
				</div>
				
					<!-- Testimonial Column -->
					<div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column wow fadeInRight" data-wow-delay="0ms">
							
							<div class="single-item-carousel owl-carousel owl-theme">
								<?php foreach ($feedbackList as $feedback): ?>
								<!-- Testimonial Block -->
								<div class="testimonial-block">
									<div class="inner-box">
										<div class="quote-icon flaticon-quote-1"></div>
										<div class="text"><?php echo $feedback['text'];?></div>
										<div class="author"><?php echo $feedback['name'];?></div>
									</div>
								</div>
								<?php endforeach;?>
								 
							</div>
							
						</div>
					</div>
				
			</div>
		</div>
	</section>
	<!-- End Welcome Section Two -->
	<!-- Questions Section >
	<section class="questions-section">
		<div class="auto-container">
			<!-- Sec Title>
			<div class="sec-title-laser centered">
				<div class="title">Остались вопросы?</div>
				<h2>Вопросы и ответы</h2>
			</div>
			
			<!-- Inner Container >
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Question Block ->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-question"></span>
							</div>
							<h3><a href="#">Question?</a></h3>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. .</div>
						</div>
					</div>
					
					<!-- Question Block
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-question"></span>
							</div>
							<h3><a href="#">Question?</a></h3>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ..</div>
						</div>
					</div>
					
					<!-- Question Block
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-question"></span>
							</div>
							<h3><a href="#">Question?</a></h3>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. .</div>
						</div>
					</div>
					
					<!-- Question Block
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-question"></span>
							</div>
							<h3><a href="#">Question?</a></h3>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. .</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- Games Section -->
	<section class="games-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-laser centered">
				<div class="title"> </div>
				<h2>Рекомендуем</h2>
			</div>
			
			<div class="row clearfix">
			<?php foreach ($trandsProducts as $pack): ?>
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
					<div class="inner-box hvr-bob">
						<div class="image">
								 
							<a href="/products/<?php echo $pack['item_id'];?>"><img src="<?php echo Products::getImage($pack['item_id']); ?>" alt="" /></a>
						</div>
						
						<div class="lower-content">
						 
							<h3><a href="/view/<?php echo $pack['item_id'];?>"><?php echo $pack['title'];?></a></h3>
							<div class=" search-box centered">
									<a href="/cart/add/<?php echo $pack['item_id'];?>"><h3><span class="icon flaticon-shopping-cart"></h3></span></a>
						</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			 
				
			</div>
			
		</div>
	</section>
	<!-- End Games Section -->
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column-l col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Sec Title -->
						<div class="sec-title-laser">
							<div class="title">Остались вопросы?</div>
							<h2><h2>Напишите нам!</h2></h2>
						</div>
						<div class="text"></div>
						<ul class="social-icons">
							<li><a href="https://vk.com/lazertaglazervaradrenalin53"><span class="fab fa-vk"></span></a></li>
							<li><a href="https://wapp.click/79022846231"><span class="fab fa-whatsapp"></span></a></li>
							<li><a href="https://www.youtube.com/channel/UChyadeZk1lQIryWBaDk1INg"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div>
				</div>
				
					<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms">
						
						<!--Default Form-->
						<div class="default-form contact-form">

							<form method="post" action="" id="contact-form">
								<div class="row clearfix">                                    
									<div class="col-md-6 col-sm-12 form-group">
										<input type="text" name="name" placeholder=Имя required="">
										<input type="text" name="surname" style="display:none !important;">
									</div>
									
									<div class="col-md-6 col-sm-12 form-group">
										<input type="tel" name="tel" placeholder="Телефон" required="">
									</div>

									<div class="col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Опишите ваше мероприятие"></textarea>
									</div>

									<div class="col-md-12 col-sm-12 form-group">
										
										<button class="theme-btn btn-style-cyber" type="submit" name="submit-support"><span class="btn-title">Отправить</span></button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div> 
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	<!-- End Call To Action Section -->
		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container clearfix">
				<!--Logo-->
				<div class="logo pull-left">
					<a href="index.html" title=""><img src="images/logo.png" alt="" title=""></a>
				</div>
				<!--Right Col-->
				<div class="pull-right">
					<!-- Main Menu -->
					<nav class="main-menu clearfix">
						<!--Keep This Empty / Menu will come through Javascript-->
					</nav><!-- Main Menu End-->
				</div>
			</div>
		</div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
				</div>
			</nav>
		</div><!-- End Mobile Menu -->
	</header>
	<!-- End Main Header -->

	
	<!--Sponsors Section-->
	<section class="sponsors-section dark-bg">
		<div class="auto-container">
			
			<div class="sponsors-outer">
				<!--Sponsors Carousel-->
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
				</ul>
			</div>
			
		</div>
	</section>
	<!--End Sponsors Section-->
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>>