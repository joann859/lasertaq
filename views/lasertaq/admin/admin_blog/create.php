<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>

 

<!-- Contact Form Section -->
    <section class="contact-form-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
                
                
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="sec-title centered">
				<div class="title">Что новое и интересное </div>
				 
			</div>
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        
                        <!--Default Form-->
                        <div class="default-form contact-form">

                            <form method="post" action="" id="contact-form">
                                <div class="row clearfix">                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <input type="text" name="title" placeholder=Заголовок required="">
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="text" placeholder="Текст статьи"></textarea>
                                    </div>
                                   
                                     <div class="col-md-12 col-sm-12 form-group">
                                        <input type="text" name="short" placeholder="Тизер" required="">
                                    </div> 
                                    
                                     <div class="col-md-3 col-sm-12 form-group">
                                         <input type="file" name="image" class="form-control"></div>
                                    </div>
                                    <div class="form-group clearfix">
                                             <select name="cat" class="form-control">
                              <option value="1" >Блог</option>
                                                                    <option value="2">Полезное</option>
                               
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
					
					
					<?php include ROOT. '/views/lasertaq/admin/footer.php'; ?>
