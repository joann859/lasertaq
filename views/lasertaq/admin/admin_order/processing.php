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
						<li data-tab="#prod-all" class="tab-btn active-btn"><span>Обработка</span></li>
						 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-all">
							<div class="content">
							    	<div class="newsletter-form">
							      <form action="" method="POST">
     <?php foreach ($userOrder as $order): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="#">Заказ № <?php echo $order['order_number'];?> </a></h2>
												
													<h2><a href="#">Пакет <?php echo $order['title'];?> </a></h2>
														<h2><a href="#">Цена <?php echo $order['price'];?> </a></h2>
														<h2><a href="#">Дата <?php echo $order['date'];?> </a></h2>
													<div class="date"> </div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														 
														
														<!-- Match Item -->
														<div class="col-lg-6 col-md-6 col-sm-12">
															 
															<div class="form-group clearfix">
																<select name="status" class="form-control">
                              <option value="1" class="cart-del" <?php if ($order['status'] == 1) echo 'selected = "selected"'; ?>>В работе</option>
                              <option value="2" class="cart-del" <?php if ($order['status'] == 2 ) echo 'selected = "selected"'; ?>>Обработан</option>
                              	
                              </select>
                              <a href="/admin/order/user/<?php echo $order['user_id'];?> " class="cart-del">Карточка клиента</a>
                              </div> 
                                         
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Отправить</span></button>
                                 
                              
															</div>
															
													 
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								</form>
								
								 <? endforeach ;?>
							 
								
							</div>
						</div>
						
 
								
								<!-- Matches Block -->
							
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
 
				
<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
