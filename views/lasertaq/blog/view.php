<?php include ROOT. '/views/lasertaq/head.php'; ?>

    <!--Page Title-->
    <section class="page-banner" >
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Главная</a></li>
                    <li>Статья</li>
                </ul>
                <h1><?php echo $article['title'];?></h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

        <!--Sidebar Page Container-->
    <div class="sidebar-page-container" >
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                		<div class="image-box">
                			<figure class="image"><img src="<?php echo Articles::getImage($article['article_id']); ?>" alt=""></figure>
                		</div>
                		<div class="lower-content">
                			<div class="post-date"><?php echo $article['date'];?></div>
							<h3><?php echo $article['title'];?></h3>
							<ul class="post-info">
							    <li><a href="">Имя автора</a></li>
							</ul>
							<p><?php echo $article['text'];?></p>
                		</div>
                    </div>

                   
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                    	<!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Поиск" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="widget-content">
                                <h4 class="sidebar-title">Другие статьи</h4>
                                <?php foreach ($articles as $article): ?>
                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/gallery/3.jpg" alt=""></a></figure>
                                        <div class="post-info">16 мая 2021</div>
                                        <div class="text"><a href="blog-single.html">Другая Статья</a></div>
                                    </div>

                                </article>
                                <?php endforeach;?>
                                
                            </div>
                        </div>

                        <!-- Tags Widget >
                        <div class="sidebar-widget popular-tags">
                            <div class="widget-content">
                                <h4 class="sidebar-title">Теги</h4>
                                <a href="matches.html">#tag</a>
                                <a href="#">#tag</a>
                                <a href="#">#tag</a>
                               
                               
                            </div>
                        </div>
                        <!-- Category Widget >
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <h4 class="sidebar-title">Категории</h4>
                                <!-- Blog Category >
                                <ul class="blog-categories">
                                    <li><a href="blog-single.html">Категория 1</a></li>
                                    <li><a href="blog-single.html">Категория 2</a></li>
                                    <li><a href="blog-single.html">Категория 3</a></li>
                                    <li><a href="blog-single.html">Категория 4</a></li>
                                    <li><a href="blog-single.html">Категория 5</a></li>
                                </ul>
                            </div>
                        </div-->           
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>
