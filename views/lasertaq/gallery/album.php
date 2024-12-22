<?php include ROOT. '/views/lasertaq/head.php'; ?>

	<!--Page Title-->
    <section class="page-banner" >
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/gallery">Галерея</a></li>
                </ul>
                <h1>Альбом <?php
	switch ($photoId) {
		case '1':
			echo 'Кибертаг';
 		break;
		case '2': 
			echo 'Лазертаг';
		break;
		case '3': 
			echo 'Псков';
		break;
		
	}
?></h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

<!-- Gallery Section Two -->
	<section class="gallery-section-three" style="background-image:url(../views/lasertaq/images/background/title-bg.jpg);">
    
        <div class="auto-container">
            
            <div class="row clearfix">
            <?php foreach ($photos as $photo): ?>
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
			
		</div>
		
	</section>
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>
