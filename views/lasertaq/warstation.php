<?php include ROOT. '/views/lasertaq/head.php'; ?>
<?php include ROOT. '/views/lasertaq/slider.php'; ?>
 <div class="ws"> 


	<!-- Advantages Section -->
	<section class="welcome-section-ws">
		<div class="auto-container">
		 
		 <div class="sec-title-ws centered">
				<div class="title"> </div>
				<h2>вам понравится !</h2>
			</div>
			
			<div class="row clearfix">
				
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/13.png" alt=""></figure>
						 
					</div>
						<div class="adv-content centered">
									<h3>Много места</h3>
								</div>
				</div>

	<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/14.png" alt=""></figure>
						 
					</div>
						<div class="adv-content centered">
									<h3>Нет аналогов</h3>
								</div>
				</div>		
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/15.png" alt=""></figure>
						 
					</div>
						<div class="adv-content centered">
									<h3>Активный <br>отдых</h3>
								</div>
				</div>
				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/16.png" alt=""></figure>
						 
					</div>
						<div class="adv-content centered">
									<h3>Динамичные игры<br>для все семьи</h3>
								</div>
				</div>
				
			</div>
			
			<!-- Lower Box -->
			<div class="lower-box">
				<div class="text">Warstation - первый центр виртуальной реальности, где ты можешь стать героем компьютерной игры. Командные/одиночные игры, улётные Дни Рождения - просто попробуй развлечение будущего!

Сражения на Марсе, в бункере или военном ангаре, битва снежками и летающие машины в городе будущего - всё это ты увидишь, надев VR очки.
</div>
				<!--<a href="about-clan.html" class="theme-btn btn-style-cyber"><span class="btn-title">About us</span></a>-->
			</div>
			
		</div>
	</section>
	<!-- End Advantages Section -->
	<section class="gallery-section-ws" style="">
	
		<div class="auto-container">
				<!-- Sec Title -->
			<div class="sec-title-ws centered">
				<div class="title"> </div>
				<h2>Наша VR арена</h2>
			</div>
			
			<div class="row clearfix">
			<?php foreach ($photoWarstation as $photo): ?>
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
				
				<a href="/album/4" class="theme-btn btn-style-ws-two"><span class="btn-title">Больше фото</span></a> 
			</div> 
		</div>
		
	</section>	
		<!-- Gallery Section -->
	<section class="">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-ws centered">
				<div class="title"></div>
				<h2>Как это выглядит</h2>
				
			</div>
			
			<div class="row clearfix">
			
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					
					<!-- Gallery Block -->
					<div class="gallery-block-two">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image hvr-bob">
							<img src="<?php echo Gallery::getImage('1'); ?>" alt="" class="current">
								<div class="overlay-box">
									<iframe src="https://vk.com/video_ext.php?oid=-206763745&id=456239062&hash=2d2237c1cdde3b68&hd=2" width="100%" height="100%" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
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
							<img src="<?php echo Gallery::getImage('1'); ?>" alt="" class="current">
								<div class="overlay-box">
									<iframe src="https://vk.com/video_ext.php?oid=-206763745&id=456239060&hash=acc327ea26a50247&hd=2" width="100%" height="100%" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
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
			<div class="sec-title-ws centered">
				<div class="title"> </div>
				<h2>Популярные режимы</h2>
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
				
				<a href="/price/cybertag" class="theme-btn btn-style-ws-two"><span class="btn-title">Весь каталог</span></a> 
			</div> 
		</div>
	</section>
	<!-- End Trands Section -->
	<!-- Double Advantages Section -->
	<section class="facts-section">
		<!-- Title Boxed -->
		<div class="title-boxed ws-video">
			<div class="auto-container">
				<div class="content wow fadeInLeft" data-wow-delay="0ms">
					<h2> ЗДЕСЬ ВАС <br> ЖДУТ</h2>
				 
				</div>
			</div>
		</div>
		<!-- End Title Boxed -->
		
		<!-- Lower Boxed -->
		<div class="lower-boxed ">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!-- Counter Column -->
					<div class="counter-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Featured Block -->
							<div class="featured-block-ws">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-star"></span>
									</div>
									<h3>Площадка 200 кв.м</h3>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block-ws">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-joystick"></span>
									</div>
									<h3>10 миров и 3 режима игры</h3>
									<div class="text"></div>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block-ws">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-success-1"></span>
									</div>
									<h3>Объемный звук</h3>
								</div>
							</div>
							<div class="featured-block-ws">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-man"></span>
									</div>
									<h3>Зона отдыха с играми</h3>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Testimonial Column -->
					<div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column-ws wow fadeInRight" data-wow-delay="0ms">
							
						 <figure class="image-box"><img src="views/lasertaq/images/vr.webp" alt=""></figure>
						<!--Overlay Box-->
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	<!-- End Double Advantages Section -->
<!-- Rules Section -->
	<section class="remember-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-ws centered">
				 
				<h2>ТЕБЕ БУДЕТ ЧТО ВСПОМНИТЬ</h2>
			<div class="text-ws"> 
		 <h3>ДНИ РОЖДЕНИЯ<br>
<span>КОРПОРАТИВЫ</span>, МЕРОПРИЯТИЯ<br>
ПРЕЗЕНТАЦИИ И <span>ОБУЧЕНИЕ</span><br>
ВЫХОДНОЙ <span> С СЕМЬЁЙ</span></h3>
			</div><br>
			 
			</div>
				<div class="lower-box centered">
				
				 <div id="arrowAnim">
  <div class="arrowSliding">
	<div class="arrow"></div>
  </div>
  <div class="arrowSliding delay1">
	<div class="arrow"></div>
  </div>
  <div class="arrowSliding delay2">
	<div class="arrow"></div>
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
						<div class="sec-title-ws">
							<div class="title">Без регистрации</div>
							<h2 style="font-size:80px !important;">Быстрая заявка</h2>
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
</div>
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
