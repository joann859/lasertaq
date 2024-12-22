<?php include ROOT. '/views/lasertaq/head.php'; ?>
<?php include ROOT. '/views/lasertaq/slider.php'; ?>
<div class="cybertag"> 
	 
	<!--End Banner Section -->

	<!-- Advantages Section -->
	<section class="welcome-section">
		<div class="auto-container">
			
		  <div class="sec-title-cyber centered">
				<div class="title"> </div>
				<h2>здесь тебя ждут</h2>
			</div>
		 
			
			<div class="row clearfix">
				
				<!--Default Portfolio Item-->
					<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/1.png" alt=""></figure>
						<!--Overlay Box-->
						 
					 
					</div>
						<div class="adv-content centered">
									<h3>Командные <br>сражения</h3>
								</div>
				</div>	

	<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/3.png" alt=""></figure>
						<!--Overlay Box-->
						 
					 
					</div>
						<div class="adv-content centered">
									<h3>Неоновая арена</h3>
								</div>
				</div>				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/2.png" alt=""></figure>
						<!--Overlay Box-->
						 
					</div>
						<div class="adv-content centered">
									<h3>Крутая <br>экипировка</h3>
								</div>
				</div>
				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/4.png" alt=""></figure>
						<!--Overlay Box-->
						 
					</div>
						<div class="adv-content centered">
									<h3>Разнообразные<br>сценарии</h3>
								</div>
				</div>
				
			</div>
			
			<!-- Lower Box -->
			<div class="lower-box">
				<div class="text">Здесь вас ждут захватывающие командные сражения в реальном времени с реальными соперниками! Море спец эффектов, высокотехнологичное оружие, крутая экипировка, неоновые огни - все для полного погружения в космическую атмосферу! Никто не останется равнодушным!
</div>
				<!--<a href="about-clan.html" class="theme-btn btn-style-cyber"><span class="btn-title">About us</span></a>-->
			</div>
			
		</div>
	</section>
	<!-- End Advantages Section -->
	<section class="gallery-section-three" >
	
		<div class="auto-container">
				<!-- Sec Title -->
				<div class="facts-section centered">
				<div class="inverse">
							 
							<h2>реальные эмоции</h2>
						</div>
						</div>
			
			<div class="row clearfix">
			<?php foreach ($photoCybertag as $photo): ?>
				<!--Gallery Item-->
				<div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
					<div class="inner-box">
						<figure class="image-box">
							 <img src="<?php echo Gallery::getImage($photo['id']); ?>" alt="" class="current">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										 
										<a href="<?php echo Gallery::getImage($photo['id']); ?>" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifier-tool"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				<?php endforeach; ?>
				
				 
			</div>
			<div class="lower-box centered">
				
				<a href="/album/1" class="theme-btn btn-style-cyber"><span class="btn-title">Больше фото</span></a> 
			</div> 
		</div>
		
	</section>	
 
			<!-- Gallery Section -->
	<section class="gallery-section-three about-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-cyber centered">
				<<div class="sec-title-cyber centered">
				<div class="inverse">
							 
							<h2>крутые воспоминания</h2>
						</div>
						</div>
			</div>
			
			<div class="row clearfix">
			
			
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					
					<!-- Gallery Block -->
					<div class="gallery-block-two">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image hvr-bob">
							<img src="<?php echo Gallery::getImage(''); ?>" alt="" class="current">
								<div class="overlay-box">
										<iframe src="https://vk.com/video_ext.php?oid=-104409582&id=456239025&hash=b9677a9a45b9e0f2&hd=2" width="100%" height="100%" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
									<!--h3><span class="icon flaticon-play-button"></span>Смотреть</h3-->
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					
					<!-- Gallery Block Two -->
					<div class="gallery-block-two">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image hvr-bob">
							<img src="<?php echo Gallery::getImage(''); ?>" alt="" class="current">
								<div class="overlay-box">
									<iframe src="https://vk.com/video_ext.php?oid=-104409582&id=456239024&hash=14b9c525ae8ba649&hd=2" width="100%" height="100%" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
									<!--h3><span class="icon flaticon-play-button"></span> Видео 2</h3-->
								</div>
							</div>
						</div>
					</div>
					
					 
					
				</div>
			
			</div>
		 
		</div>
		 
	</section>
	<!-- End Gallery Section -->
	
	<!-- Trands Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
				<div class="facts-section centered">
				<div class="inverse">
				<h2>попробуй сам !</h2>
				</div>
			</div>
			
			<div class="row clearfix">
				
			<!-- News Block -->
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
			<div class="lower-box centered">
				
				<a href="/price/cybertag" class="theme-btn btn-style-cyber"><span class="btn-title">Весь каталог</span></a> 
			</div> 
		</div>
	</section>
	<!-- End Trands Section -->
	<!-- Double Advantages Section -->
	<section class="facts-section">
		<!-- Title Boxed -->
		<div class="title-boxed" style="background-image:url(views/lasertaq/images/background/logo-X.jpg)">
			<div class="auto-container">
				<div class="content wow fadeInLeft" data-wow-delay="0ms">
					<h2 style="color:white !important;"> БУДЕТ УЛЕТНО <br> ВЕСЕЛО</h2>
				 
				</div>
			</div>
		</div>
		<!-- End Title Boxed -->
		
		<!-- Lower Boxed -->
		<div class="lower-boxed">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!-- Counter Column -->
					<div class="counter-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							
							 
							
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
		</div>
		
	</section>
	<!-- End Double Advantages Section -->
<!-- Rules Section -->
	<section class="questions-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-cyber centered">
				<div class="title"></div>
				<h2>А также !</h2>
			</div>
			
			<!-- Inner Container -->
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Question Block -->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<figure class="image-box"><img src="views/lasertaq/images/resource/table-hockey.png" alt=""></figure>
							 </div>
							 <div class="default-portfolio-item"> 
								<div class="adv-content centered">
									<h3>Настольный хоккей</h3>
								</div>
								</div>
					</div>
					
					<!-- Question Block -->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<figure class="image-box"><img src="views/lasertaq/images/resource/labirint.png" alt=""></figure>
							 </div>
							  <div class="default-portfolio-item"> 
								<div class="adv-content centered">
									<h3>Лазерный лабиринт</h3>
								</div>
								</div>
								
					</div>
					
					
					
				</div>
			</div>
			
		</div>
	</section>
 <!-- End Rules Section-->
 
 
	<!-- Contact Form Section -->
	<section class="contact-form-section style-two" id="speedleed">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
						<!-- Sec Title -->
						<div class="facts-section">
				<div class="inverse">
							<div class="title">Без регистрации</div>
							<h2>Быстрая заявка</h2>
						</div>
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
	

	<!--Sponsors Section>
	<section class="sponsors-section">
		<div class="auto-container">
			
			<div class="sponsors-outer">
				<!--Sponsors Carousel>
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
 
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
