<?php include ROOT. '/views/lasertaq/head.php'; ?>

  
<section class="matches-section">
	<div class="auto-container">
		  <div class="sec-title-cyber centered">
				 
				<h2>Заказы</h2>
			</div>
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li class="tab-btn active-btn" data-tab="#cart"><span>Корзина</span></li>
						<li class="tab-btn" data-tab="#order"><span>Заказы</span></li>
					 
						 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
					
						<div class="tab active-tab" id="cart">
							<!-- Matches Block -->
							<?php if($productsInCart): ?>
								 <?php foreach ($products as $product): ?>
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
													 
													<div class="title"></div>
													<h2><a href="/products/<?php echo $product['item_id'];?>"><?php echo $product['title'];?></a></h2>
													<div class="date"><?php if($product['status'] == 1): ?>Мероприятие готовится<?php else: ?>Осталось только оформить<?php endif;?> </div><br>
													<ul class="tags">
														<form method="post" action="" id="contact-form">
														 
														 <input type="text" name="cat" value="<?php echo $product['cat'];?>"style="display:none;">
														 <input type="text" name="order_number" value="<?php echo $product['order_number'];?>"style="display:none;">
														  
														 <?php $timezone = date('Y-m-d');
														 $final = date("Y-m-d", strtotime("+1 month"));
														 ?>
														 <li><input type="date" name="date" value="<?php echo $timezone;?>" min="<?php echo $timezone;?>" max="<?php echo $final;?>" /></li>
            	                                           <li><button class="" type="submit" name="submit" style="background-color:white;">ОФОРМИТЬ</button></li>
														<li><a href="cart/del/<?php echo $product['item_id'];?>" style="color:black;" ym(86842562,'reachGoal','submit' >Удалить</a></li>
														</form>
													</ul>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
												
														</div>
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<img src="<?php echo Products::getImage($product['item_id']); ?>" alt="">
																</div>
																<!--a href="#" class="product">Loin king</a-->
															</div>
														</div>
														
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
						<!--Tab-->
							<?php endforeach;?>
								<?php else :?><div class="sec-title centered">
				<div class="title"><br><br>Здесь пока ни чего нет :(<br><br></div></div> 
							<?php endif; ?> 
							</div>
							<div class="tab" id="order">
							<?php if($ordersInCart): ?>
								 <?php foreach ($orders as $product): ?>
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
													 
													<div class="title"></div>
													<h2><a href="/products/<?php echo $product['item_id'];?>"><?php echo $product['title'];?></a></h2>
													<div class="date"><?php if($product['status'] == 2): ?>Мероприятие проведено<?php endif;?> </div><br>
													<ul class="tags">
														
														<li><a href="/feedback">Оставить отзыв</a></li>
														 
													</ul>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
												
														</div>
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<img src="<?php echo Products::getImage($product['item_id']); ?>" alt="">
																</div>
																<!--a href="#" class="product">Loin king</a-->
															</div>
														</div>
														
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
						<!--Tab-->
							<?php endforeach;?>
								<?php else :?><div class="sec-title centered">
				<div class="title"><br><br>Здесь пока ни чего нет :(<br><br></div></div> 
							<?php endif; ?> 
							</div>
							</div>
								</div>
									</div>
										</div>
							
						
						
	</section>
	<!-- End Matches Section -->
<?php include ROOT. '/views/lasertaq/footer.php'; ?>