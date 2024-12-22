<?php include ROOT. '/views/lasertaq/head.php'; ?>

    <!--Page Title-->
    <section class="page-banner" style="">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Главная</a></li>
                      
                </ul>
                <h1>Адреналин</h1>
            </div>
            <div class="sidebar-side col-lg-12 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="/search">
                                <div class="form-group">
                                    <input type="search" name="call" value="" placeholder="Поиск" required>
                                    <button type="submit" name="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        </aside>
                        </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- ПАКЕТЫ УСЛУГ -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
         
            
            <div class="row clearfix">
                
            <!-- News Block -->
            <?php foreach ($packList as $pack): ?>
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
    <!-- End ПАКЕТЫ УСЛУГ -->
    <?php include ROOT. '/views/lasertaq/footer.php'; ?>
