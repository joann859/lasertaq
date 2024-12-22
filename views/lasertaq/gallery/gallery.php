<?php include ROOT. '/views/lasertaq/head.php'; ?>

	<!--Page Title-->
    <section class="page-banner" >
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-3.html">Главная</a></li>
                     
                </ul>
                <h1>Галерея</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Gallery Section Three -->
    <section class="gallery-section-three" style="background-image:url(views/lasertaq/images/background/title-bg.jpg);">
    
        <div class="auto-container">
            
            <div class="row clearfix">
            
                <!--Gallery Item-->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
                    <div class="sec-title centered"><div class="title">Кибертаг - Арена</div></div>
                    <div class="inner-box">
                        <figure class="image-box">
                           <img src="<?php echo Gallery::getImage('5'); ?>" alt="" class="current">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        
                                        <a href="album/1" data-caption="" class="link"><span class="icon flaticon-eye"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                 <!--Gallery Item-->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
                   <div class="sec-title centered"><div class="title">Лазертаг - Адреналин</div></div>
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="<?php echo Gallery::getImage('14'); ?>" alt="" class="current" >
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        
                                        <a href="album/2" data-caption="" class="link"><span class="icon flaticon-eye"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                 <!--Gallery Item-->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
                     <div class="sec-title centered"><div class="title">WARSTATION</div></div>
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="<?php echo Gallery::getImage('35'); ?>" alt="" class="current">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        
                                        <a href="album/4" data-caption="" class="link"><span class="icon flaticon-eye"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>
