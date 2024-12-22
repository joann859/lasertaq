 
<?php include ROOT. '/views/lasertaq/head.php'; ?>

<!-- Contact Form Section -->
    <section class="contact-form-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
                
                
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="sec-title centered">
                <div class="title">Забронируйте дату вашего мероприятия</div>
                 
            </div>
    
                        <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
         
            
            <div class="row clearfix">
                
            <!-- News Block -->
            <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        
                        <!--Default Form-->
                        <div class="default-form contact-form">

                             
                                <div class="row clearfix">                                    
                                    
                                             
                               
                                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                 <form method="post" action="" id="contact-form">
                                      
                                     <?php foreach ($orderByNumber as $order): ?>
                                      
                                     <input type="text" name="cat" value="<?php echo $order['cat'];?>"style="display:none;">
                                                                <input type="text" name="order_number" value="<?php echo $order['order_number'];?>"style="display:none;">
                                     <?php endforeach;?>
                                     <?php
                                       $timezone = date('Y-m-d');
                                       $final = date("Y-m-d", strtotime("+1 month"));
                                        ?>
                                        
                                    <input type="date" name="date" value="<?php echo $timezone;?>" min="<?php echo $timezone;?>" max="<?php echo $final;?>" style="background: #1b1a1a; border: none;width: 300px;padding: 25px;color:white;"/>
                                      
                                    <div class="col-md-6 col-sm-6 form-group">
                                        <button class="theme-btn btn-style-four" type="submit" name="submit"><span class="btn-title" ym(86842562,'reachGoal','submit')>Забронировать</span></button>
                                    </div>
                                     </form></div>
                                
                                
                                    
                                     
                                </div>
                           
                        </div>
                        
                    </div>
            </div>
            
        </div>
    </section>		
                </div> 
                
    
            </div>
        </div>
        
    </section>
             <!--Page Title-->
     
 
                    
                 


<?php include ROOT. '/views/lasertaq/footer.php'; ?>