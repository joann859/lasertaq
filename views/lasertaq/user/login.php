<?php include ROOT. '/views/lasertaq/head.php'; ?>
<!--Column-->
 <?php if (isset($errors) && is_array($errors)): ?>
  <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="column col-lg-4 col-md-6 col-sm-12 ">
						<div class="footer-widget newsletter-widget">
							<div class="footer-title">
                            	<h2>Авторизация</h2>
                            </div>
							<div class="text"></div>
							<div class="newsletter-form">
                                <form method="post" action="#">
                                    <div class="form-group clearfix">
                                        <input type="email" name="email" value="<?php echo $email ;?>" placeholder="Email" required><br>
                                    </div>
                                     <div class="form-group clearfix">
                                        <input type="password" name="password" value="<?php echo $password ;?>" placeholder="Пароль" required><br><br>
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Отправить</span></button>
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
