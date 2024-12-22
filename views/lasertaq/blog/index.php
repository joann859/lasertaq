<?php include ROOT. '/views/lasertaq/head.php'; ?>

    <!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/texture.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Главная</a></li>
                     
                </ul>
                <h1>Блог</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- News Section -->
	<section class="news-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
			    <?php foreach ($articles as $article): ?>
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
					<div class="inner-box hvr-bob">
						<div class="image">
							<a href="/article/<?php echo $article['article_id'];?>"><img src="<?php echo Articles::getImage($article['article_id']); ?>" alt=""></a>
						</div>
						<div class="lower-content">
							<div class="post-date"><?php echo $article['date'];?></div>
							<h3><a href="/article/<?php echo $article['article_id'];?>"><?php echo $article['short'];?></a></h3>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			

				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>
