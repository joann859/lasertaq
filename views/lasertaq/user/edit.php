<?php include ROOT. '/views/lasertaq/head.php'; ?>
<section class="matches-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Изменение учетных данных</div>
				 
			</div>
			
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
					 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="packages">
						      <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
								<div class="newsletter-form">
                                <form method="post" action="#">
                                    <div class="form-group clearfix">
                                        <input type="email" name="email" value="<?php echo $email ;?>" placeholder="Email" required><br>
                                        
                                    </div>
                                     <div class="form-group clearfix">
                                        <input type="password" name="password" value="<?php echo $password ;?>" placeholder="Пароль" required><br><br>
                                        
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Сохранить</span></button>
                                    </div>
                                </form>
                            </div>
                <?php endif; ?>
								
							</div>
						</div>
				 
						
						 
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
