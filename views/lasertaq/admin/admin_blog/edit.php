<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>

 
<!-- Contact Form Section -->
    <section class="contact-form-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
                
                
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="sec-title centered">
				<div class="title">Редактировать статью ID: <?php echo $id; ?></div>
				 
			</div>
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        
                        <!--Default Form-->
                        <div class="default-form contact-form">

                           <form method="post" action="#" enctype="multipart/form-data">
                                <div class="row clearfix">                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <input type="text" name="title" value="<?php echo $article['title']; ?>" placeholder=Заголовок required="">
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="text" value=" " placeholder="Текст статьи"><?php echo $article['text']; ?></textarea>
                                    </div>
                                   
                                     <div class="col-md-12 col-sm-12 form-group">
                                        <input type="text" name="short" value="<?php echo $article['short']; ?>" placeholder="Тизер" required="">
                                    </div> 
                                    
                                     <div class="col-md-3 col-sm-12 form-group">
                                       
                                        <input type="file" name="image" class="form-control"></div>
                                    </div>
                                    <div class="form-group clearfix">
                                             <select name="cat" class="form-control">
                              <option value="1" <?php if ($article['cat'] == 1) echo 'selected = "selected"'; ?>>Блог</option>
                              <option value="2" <?php if ($article['cat'] == 2 ) echo 'selected = "selected"'; ?>>Полезное</option>
                              </select>
                                         </div>
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Запостить</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div> 
                
	
            </div>
        </div>
        
    </section>
					
					<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
