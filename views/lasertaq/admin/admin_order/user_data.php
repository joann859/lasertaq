<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>
<h2>Управление заказами</h2><br>

	<section class="matches-section">
		<div class="auto-container">
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-all" class="tab-btn active-btn"><span>Карточка клиента</span></li>
						 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-all">
							<div class="content">
							    
							      
    
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="#">Имя: <?php echo $userData['name'];?> </a></h2>
												
													<h2><a href="#">Телефон :<?php echo $userData['tel'];?> </a></h2>
														<h2><a href="#">Почта :<?php echo $userData['email'];?> </a></h2>
													<div class="date"> </div>
												</div>
											</div>
											
											<!-- Match Column -->
										
											
										</div>
									</div>
								</div>
								
								 
							 
								
							</div>
						</div>
						
 
								
								<!-- Matches Block -->
							
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
 
				
<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
