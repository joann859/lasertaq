<?php include ROOT. '/views/lasertaq/head.php'; ?>

    <!-- Slider Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer-neon" style="background-image:url(../views/lasertaq/images/main-slider/Design.png"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="text">Единственная в Пскове!</div>
                        <h2>ДВУХЭТАЖНАЯ НЕОНОВАЯ АРЕНА 2000 кв.м.</h2>
                         <a href="#speedleed" class="theme-btn btn-style-cyber"><span class="btn-title">Быстрая заявка</span></a> 
                    </div>  
                </div>
            </div>

           
            	
        </div>
    </section>
    <!--End Banner Section -->

	<!-- Advantages Section -->
	<section class="welcome-section">
		<div class="auto-container">
		 
		 
			
			<div class="row clearfix">
				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/9.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Крутые<br>спец. эффекты</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>

	<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/10.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Банкетная<br> зона</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/11.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Интересные сценарии<br></a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Default Portfolio Item-->
				<div class="default-portfolio-item col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="inner-box hvr-bob">
						<figure class="image-box"><img src="views/lasertaq/images/advantages/12.png" alt=""></figure>
						<!--Overlay Box-->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="#">Специалисты<br>инструкторы</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- Lower Box -->
			<div class="lower-box">
				<div class="text">
У нас Вы можете
- Отметить День Рождения🎁
- Провести выпускной или окончание учебного года 🎈
- Провести корпоратив
- Возможность отдых с друзьями</div>
				<!--<a href="about-clan.html" class="theme-btn btn-style-cyber"><span class="btn-title">About us</span></a>-->
			</div>
			
		</div>
	</section>
	<!-- End Advantages Section -->
	<section class="gallery-section-three" style="background-image:url(../views/lasertaq/images/background/title-bg.jpg);">
    
        <div class="auto-container">
            	<!-- Sec Title -->
			<div class="sec-title-cyber centered">
				<div class="title"> </div>
				<h2>Наша арена</h2>
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
	<section class="gallery-section about-section"style="background-image:url(../views/lasertaq/images/background/title-bg.jpg);background-size:140%;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-cyber centered">
				<div class="title"></div>
				
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
									<a href="https://youtu.be/JpTy4A3pSd0" class="lightbox-image overlay-link"></a>
									<h3><span class="icon flaticon-play-button"></span>Смотреть</h3>
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
									<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-link"></a>
									<h3><span class="icon flaticon-play-button"></span> Видео 2</h3>
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
			<div class="sec-title-cyber centered">
				<div class="title"> </div>
				<h2>Популярные пакеты</h2>
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
		<div class="title-boxed" style="background-image:url(views/lasertaq/images/background/6.jpg)">
			<div class="auto-container">
				<div class="content wow fadeInLeft" data-wow-delay="0ms">
					<h2> ЗДЕСЬ ВАС <br> ЖДУТ</h2>
				 
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
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-star"></span>
									</div>
									<h3>Банкетная зона</h3>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-joystick"></span>
									</div>
									<h3>Более 20</h3>
									<div class="text">Сценариев игры</div>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-success-1"></span>
									</div>
									<h3>Лазерный лабиринт</h3>
								</div>
							</div>
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-man"></span>
									</div>
									<h3>Аниматоры</h3>
								</div>
							</div>
							
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
				<div class="title">Сценарии игр</div>
				<h2>ТЕБЕ БУДЕТ ЧТО ВСПОМНИТЬ</h2>
			</div>
			
			<!-- Inner Container -->
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Question Block -->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="">1</span>
							</div>
							<h3><a href="#">ИГРА КАЛЬМАРА</a></h3>
							<div class="text">В основе нашей программы лежат задания из нашумевшего сериала, которые по факту являются играми нашего детства: тише едешь - дальше будешь, перетягивание каната и др.</div>
						</div>
					</div>
					
					<!-- Question Block -->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="">2</span>
							</div>
							<h3><a href="#">ЛАЗЕРНЫЙ ЛАБИРИНТ</a></h3>
							<div class="text">Это фантастическая комната, на стенах которой имеются лазерные аппараты.  
Суть игры в том, чтобы пробраться от одной стены к другой, не коснувшись ни одного луча и при этом выполнить ряд заданий. </div>
						</div>
					</div>
					
					<!-- Question Block -->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="">3</span>
							</div>
							<h3><a href="#">АРЕННЫЙ КИБЕРТАГ</a></h3>
							<div class="text">Здесь вас ждут захватывающие командные сражения в реальном времени с реальными соперниками!</div>
						</div>
					</div>
					
					<!-- Question Block -->
					<div class="question-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="">4</span>
							</div>
							<h3><a href="#">AMONG US</a></h3>
							<div class="text">Тематический квест по мотивам популярной игры AMONG US.</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
			
		</div>
	</section>
 <!-- End Rules Section-->
 <!-- Matches Section-->
<section class="matches-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-cyber centered">
				<div class="title">Узнать результат</div>
				<h2>Матчи</h2>
			</div>
			
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-all" class="tab-btn active-btn"><span>Прошедние</span></li>
						 
						 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-all">
							<div class="content">
								<?php foreach ($oldMatches as $match): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
													 
													<div class="title"></div>
													<h2><a href="matches-single.html">Матч №<?php echo $match['match_id'];?></a></h2>
													<div class="date">Дата:<br><?php echo $match['match_date'];?></div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<span class="icon flaticon-lion"></span>
																</div>
																<a href="#" class="product"><?php echo $match['command_a'];?></a>
																	<a href="#" class="product"><?php echo $match['result_a'];?></a>
															</div>
														</div>
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<span class="icon flaticon-wolf"></span>
																</div>
																<a href="#" class="product"><?php echo $match['command_b'];?></a>
																<a href="#" class="product"><?php echo $match['result_b'];?></a>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							<?php endforeach;?>
								
							</div>
						</div>
						
						<!--Tab-->
                        <div class="tab" id="prod-matches">
							<div class="content">
								
								 
								
							</div>
						</div>
						
						 
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Matches Section -->
    <!-- Contact Form Section -->
    <section class="contact-form-section style-two" id="speedleed">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
                        <!-- Sec Title -->
                        <div class="sec-title-cyber">
                            <div class="title">Без регистрации</div>
                            <h2>Быстрая заявка</h2>
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
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="tel" name="tel" placeholder="Телефон" required="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Опишите ваше мероприятие"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="g-recaptcha" data-sitekey="6LfQrUMgAAAAAGISOtGLJb8omR41MgHZ0CkMwKGQ"></div>
                                    <div class="text-danger" id="recaptchaError"></div>
                                    <script src='https://www.google.com/recaptcha/api.js'></script>
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
