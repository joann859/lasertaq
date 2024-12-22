<?php include ROOT. '/views/lasertaq/head.php'; ?>

<style>
.match-single .text-box p{
    letter-spacing: 2px;
  word-spacing: 4px;
  color:black !important;
}
.comments-area .comment-box .name, .group-title h3, .match-single .title-box .recent-result span{
    color: black !important;
}

.sidebar-widget .sidebar-title{
    color:red !important;
}
.match-single .text-box, .match-single .team-box{
    border-bottom:0px transparent !important;
}

</style>
    <!--Page Title-->
    <section class="page-banner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/price/cybertag">Кибертаг</a></li>
                </ul>
                <h1><?php switch ($product['cat']) {
    case 1:
        echo "Кибертаг";
        break;
    case 2:
        echo "Лазертаг";
        break;
    case 3:
        echo "Warstation";
        break;
}?></h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Match Single -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="match-single">

                        <!-- Title Box -->
                        <div class="title-box">
                            <h3 style="color:black !important;">Пакет: <?php echo $product['title'];?></h3>
                            <div class="recent-result"><?php echo $product['price'];?>₽
                            <span><?php switch ($product['price-type']) {
                                            case 1:
                                                echo "за человека";
                                                break;
                                            case 2:
                                                echo "будни до 8 человек";
                                                break;
                                            case 3:
                                                echo "будни до 12 человек";
                                                break;
                                            case 4:
                                                echo "выходные до 8 человек";
                                                break;
                                            case 5:
                                                echo "выходные до 12 человек";
                                                break;
                                   }?></span></div>
                            <div class="date">17th APRIL 2019, 11:00 PM</div><br>
                        </div>

                        <!-- Team Box -->
                        <div class="team-box">
                            
                            <!-- Match Item -->
                            <div class="match-item pull-right">
                                <div class="inner-item">
                                    <div class="text-box">
                            <p><?php echo $product['description'];?></p>
                            
                             </div>
                                    <a href="/cart/add/<?php echo $product['item_id'];?>" class="product">добавить в корзину.</a>
                                    
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <figure class="image"><a href="<?php// echo Products::getImage($product['item_id']); ?>" class="lightbox-image"><img src="<?php echo Products::getImage($product['item_id']); ?>" alt=""></a></figure>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <figure class="image"><a href="<?php// echo Products::getImage($product['item_id']); ?>" class="lightbox-image"><img src="<?php echo Products::getImage($product['item_id']); ?>" alt=""></a></figure>
                                </div>
                            </div><br>
                        <!-- Comments Area -->
                         
                        <div class="comments-area">
                            <div class="group-title"><h3>Рекомендуем!</h3></div>
                            <?php foreach ($trandsProducts as $pack): ?>
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <figure class="thumb">
                                        <a href="/products/<?php echo $pack['item_id']?>">
                                        <img src="<?php echo Products::getImage($pack['item_id']); ?>" alt="">
                                        </a>
                                        </figure>
                                    </div> 
                                    <h4 class="name"><?php echo $pack['title']?></h4>
                                    <div class="text"><?php echo substr($pack['description'],0, 300) ?>"...</div>
                                    <a href="/products/<?php echo $pack['item_id']?>" class="reply-btn">смотреть</a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                       
                      
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                       
                        <!-- Studio Widget -->
                        <div class="sidebar-widget studio-widget">
                            <div class="widget-content" style="background-image:url(<?php echo Products::getImage($product['item_id']); ?>)">
                                <!--h2 class="title"><a href="#">Gaming<Br> studio</a></h2-->
                            </div>
                        </div>
                        <!-- Upcoming Widget -->
                        <div class="sidebar-widget upcoming-widget">
                            <div class="widget-content">
                                <h4 class="sidebar-title">Акции и скидки</h4>
                                <!-- Upcoming Match -->
                                <?php foreach ($promoList as $promo): ?>
                                <div class="upcoming-match">
                                    <div class="inner">
                                        <div class="team-box clearfix">
                                            <!-- Match Item -->
                                            <div class="match-item pull-left">
                                                <div class="icon-box">
                                                    <img src="/views/lasertaq/images/products_img/promo.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><?php echo $promo['title'];?></span>
                                        <a href="#" class="overlay-link"></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
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
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
