<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>


 
<!-- Contact Form Section -->
    <section class="contact-form-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
                
                
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="sec-title centered">
				<div class="title"><?php echo $msg; ?></div>
				 
				 
			</div>
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        
                        <!--Default Form-->
                        <div class="default-form contact-form">

                            <form method="post" action="" id="contact-form">
                                <div class="row clearfix">                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <input style="background: #1b1a1a; border: none;width: 300px;padding: 25px;color:white;" type="datetime-local" name="date">
                                    </div>
                                    <select name="cat" class="form-control">
                                  <?php if (is_array($categoryList)) : ?>
                                  <?php foreach ($categoryList as $category): ?>
                                     <option value="<?php echo $category['category_id']; ?>">
                                         <?php echo $category['name']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                              </select>
                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Создать</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div> 
                
	
            </div>
        </div>
        
    </section>
					
					
					<?php include ROOT. '/views/lasertaq/admin/footer.php'; ?>
