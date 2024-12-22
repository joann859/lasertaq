<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>
 
<section class="matches-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Привет, Администратор!</div>
				 
			</div>
			
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#packages" class="tab-btn active-btn"><span>Пакеты</span></li>
						<li data-tab="#articles" class="tab-btn"><span>Блог</span></li>
						<li data-tab="#order" class="tab-btn"><span>Заказы</span></li>
							<li data-tab="#matches" class="tab-btn"><span>Матчи</span></li>
							<li data-tab="#booking" class="tab-btn"><span>Букинг</span></li>
							<li data-tab="#crm" class="tab-btn"><span>Аналитика</span></li>
						 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="packages">
						     <a href="admin/package/create" class="cart-del"><h2 class="title">+</h2></a> 
								<div class="content">
							      <?php foreach ($productsList as $product): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="#">Пакет :<?php echo $product['title'];?> </a></h2>
													<div class="date"><h2><?php echo $product['price'];?> руб.</h2></div>
													<div class="date"><?php echo $product['description'];?></div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														 
														
														<!-- Match Item -->
														<div class="col-lg-6 col-md-6 col-sm-12">
															 
																<a href="/admin/package/delete/<?php echo $product['item_id'];?> " class="cart-del">Удалить</a>
																<a href="/admin/package/edit/<?php echo $product['item_id'];?> " class="cart-del">Редактировать</a>
																 
															</div>
													 
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								 <? endforeach ;?>
							 
								
							</div>
						</div>
						
						<!--Tab-->
                        <div class="tab" id="articles">
                            <a href="admin/article/create" class="cart-del"><h2 class="title">+</h2></a> 
								<div class="content">
							      <?php foreach ($blog as $article): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="#"><?php echo $article['title'];?> </a></h2>
													<div class="date"><?php echo $article['short'];?></div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														 
														
														<!-- Match Item -->
														<div class="col-lg-6 col-md-6 col-sm-12">
															 
																<a href="/admin/article/delete/<?php echo $article['article_id'];?> " class="cart-del">Удалить</a>
																<a href="/admin/article/edit/<?php echo $article['article_id'];?> " class="cart-del">Редактировать</a>
																 
															</div>
													 
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								 <? endforeach ;?>
							 
								
							</div>
						</div>
							<!--Tab-->
                        <div class="tab" id="order">
                            <div class="content">
							      <?php foreach ($orderList as $order): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="#">Заказ № <?php echo $order['order_number'];?> </a></h2>
													<div class="date"> </div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														 
														
														<!-- Match Item -->
														<div class="col-lg-6 col-md-6 col-sm-12">
															 
																<a href="/admin/order/delete/<?php echo $order['order_number'];?> " class="cart-del">Удалить</a>
																<a href="/admin/order/processing/<?php echo $order['order_number'];?> " class="cart-del">Обработать</a>
															</div>
													 
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								 <? endforeach ;?>
							 
								
							</div>
                        </div>
                        <div class="tab" id="matches">	<br>
                        <div class="sec-title centered">
				<div class="title">Прошедшие</div>
				 
			</div>
			 <a href="admin/match/create" class="cart-del"><h2 class="title">+</h2></a>
                        <div class="content">
								<?php foreach ($oldMatches as $match): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
													 
													<div class="title"></div>
													<h2><a href="matches-single.html">Матч №<?php echo $match['match_id'];?></a></h2>
													<div class="date">Дата:<br><?php echo $match['match_date'];?></div>
													<a href="/admin/match/delete/<?php echo $match['match_id'];?> " class="cart-del">Удалить</a>
																<a href="/admin/match/edit/<?php echo $match['match_id'];?> " class="cart-del">Редактировать</a>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														<!-- Match Item -->
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<span class="icon flaticon-lion"></span>
																</div>
																<a href="#" class="product"><?php echo $match['command_a'];?></a>
																	<a href="#" class="product"><?php echo $match['result_a'];?></a>
															</div>
														</div>
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<span class="icon flaticon-wolf"></span>
																</div>
																<a href="#" class="product"><?php echo $match['command_b'];?></a>
																<a href="#" class="product"><?php echo $match['result_b'];?></a>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							<?php endforeach;?>
								
							</div>
							<br>
                         
                        </div>
                        	<!--Tab-->
                        <div class="tab" id="booking">
                            <a href="admin/date/create" class="cart-del"><h2 class="title">+</h2></a> 
								<div class="content">
							      <?php foreach ($bookingList as $date): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="#"><?php echo $date['qwerty'];?> </a></h2>
													<div class="date"><?php if ($date['status'] == "2"):?><?php echo "<h2>Забронировано</h2>" ;?><?php else: ?><?php echo "<h2>Свободно</h2>" ;?> 
													<?php endif;?></div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														 
														
														<!-- Match Item -->
														<div class="col-lg-6 col-md-6 col-sm-12">
															 
																<a href="/admin/date/delete/<?php echo $date['booking_id'];?> " class="cart-del">Удалить</a>
															 
																 
															</div>
													 
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								 <? endforeach ;?>
							 
								
							</div>
						</div>
                         <div class="tab" id="crm">
                          
                            <a href="admin/crm/1" class="cart-del"><h2 class="title">Перейти к аналитике</h2></a> 
								
		</div>
	</section>
	<!-- End Matches Section -->

<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
