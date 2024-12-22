<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>
<h2>Работа с пакетами</h2><br>

 
                                <section class="matches-section">
		<div class="auto-container">
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-all" class="tab-btn active-btn"><span>Пакеты в магазине:</span></li>
							<li  class="tab-li"><a href="/admin/package/create"><span>+ Добавить пакет</span></a></li> 
		
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-all">
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
						
 
								
								<!-- Matches Block -->
							
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
