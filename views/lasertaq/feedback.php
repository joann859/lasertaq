<?php include ROOT. '/views/lasertaq/head.php'; ?>
  <!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/title-bg.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Главная</a></li>
                     
                </ul>
                <h1>Отзывы</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->
<div class="sidebar-page-container">
        <div class="auto-container ">
            <div class="row clearfix ">

                <!--Content Side / Blog Detail-->
                <div class=" col-lg-12 col-md-12 col-sm-12 ">
                    

                    <!-- Other Options -->
                    <div class="post-share-options clearfix">

                        <div class="social-links centered">
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Comments Area -->
                    
                    <div class="comments-area">
                        <div class="group-title"><h3>Отзывы</h3></div>
                        <div class="comment-box">
                            <?php foreach ($feedbackList as $comment): ?>
                            <!-- Author Box -->
                    <div class="author-box">
                        <div class="inner-box">
                            <figure class="thumb"><img src="<?php echo Articles::getImage('1'); ?>" alt=""></figure>
                            <h3 class="name"><?php echo $comment['name'];?></h3>
                            <div class="text"><?php echo $comment['text'];?> 
                        </div>
                    </div></div>
                            <?php endforeach; ?>
                        </div>

                         
                    </div>

                    <!--Comment Form-->
                    <div class="comment-form">
                        <div class="group-title"><h3>Оставьте отзыв</h3></div>

                        <form method="post" action="#">
                            <div class="row clearfix">                                    
                                <div class="col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Имя" required="">
                                </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                    <textarea name="text" placeholder="Напишите ваше мнение"></textarea>
                                </div>
                                       
                                <div class="col-md-12 col-sm-12 form-group">
                                    
                                    <a href="feedback/create"><button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Запостить</span></button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

               
            </div>
        </div>
    </div>
  
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>