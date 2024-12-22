<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>
 

 <section class="matches-section">
     	<div class="auto-container">
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				      <div class="column col-lg-12 col-md-12 col-sm-12 ">
						<div class="footer-widget newsletter-widget">
							<div class="footer-title">
                            	<h2>Редактирование матча</h2>
                            </div>
							<div class="text"></div>
						 
                    
                
                    
                        <ul>
                            
                        </ul>
                   			<div class="newsletter-form">
                                <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-group clearfix">
                                        <input type="text" name="command_a" value="<?php echo $matches['command_a'];?>" placeholder="" required></div>
                                        <div class="form-group clearfix">
                                        <input type="text" name="result_a" value="<?php echo $matches['result_a'];?>" placeholder=" " required></div>
                                        <div class="form-group clearfix">
                                        <input type="text" name="command_b" value="<?php echo $matches['command_b'];?>" placeholder=" " required></div>
                                        <div class="form-group clearfix">
                                        <input type="text" name="result_b" value="<?php echo $matches['result_b'];?>" placeholder=" " required></div>
                                        <div class="form-group clearfix">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Сохранить</span></button>
                                    </div>
                                </form>
                               
                            </div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
				</div>   
			
				</div>   
					</div>   
					</section>
					
					
					<?php include ROOT. '/views/lasertaq/admin/footer.php'; ?>
