<?php include ROOT. '/views/lasertaq/head.php'; ?>

<!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/title-bg.jpg);background-size:200%;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Главная</a></li>
                   
                </ul>
                <h1>Видеогалерея</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Gallery Section -->
	<section class="gallery-section about-section"style="background-image:url(../views/lasertaq/images/background/title-bg.jpg);background-size:140%;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
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
			<!-- Lower Content -->
			<div class="lower-content">
				<div class="row clearfix">
					
					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<h3>Lorem ipsum dolor sit amet, consectetur</h3>
					</div>
					
					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
					</div>
					
					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
					</div>
					
				</div>
			</div>
		</div>
		 
	</section>
	<!-- End Gallery Section -->
    	<?php include ROOT. '/views/lasertaq/footer.php'; ?>

