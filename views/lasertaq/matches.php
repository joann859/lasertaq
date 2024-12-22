<?php include ROOT. '/views/lasertaq/head.php'; ?>
<section class="matches-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Узнать результат</div>
				<h2>Матчи за неделю</h2>
			</div>
			
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-all" class="tab-btn active-btn"><span>Прошедние</span></li>
						<li data-tab="#prod-matches" class="tab-btn"><span>Грядущие</span></li>
						 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-all">
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
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
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
						</div>
						
						<!--Tab-->
                        <div class="tab" id="prod-matches">
							<div class="content">
								
								<?php foreach ($previewMatches as $match): ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
												 
													<div class="title"></div>
													<h2><a href="matches-single.html">Матч №<?php echo $match['match_id'];?></a></h2>
													<div class="date"><?php echo $match['match_date'];?></div>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-5 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
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
						</div>
						
						 
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Matches Section -->
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>