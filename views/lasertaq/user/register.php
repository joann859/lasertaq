<?php include ROOT. '/views/lasertaq/head.php'; ?>
<!--Column-->
                    <div class="column col-lg-4 col-md-6 col-sm-12 ">
						<div class="footer-widget newsletter-widget">
							<div class="footer-title">
                            	<h2>Регистрация</h2>
                            </div>
							<div class="text"></div>
							<?php if ($result): ?>
                    <h2>Добро пожаловать</h2>
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
                                        <input type="text" name="name" value="<?php echo $name ;?>" placeholder="Ваше имя" required></div>
                                        <div class="form-group clearfix">
                                        <input type="email" name="email" value="<?php echo $email ;?>" placeholder="Email " required></div>
                                        <div class="form-group clearfix">
                                        <input type="tel" name="tel" value="<?php echo $tel ;?>" placeholder="Телефон" required></div>
                                        <div class="form-group clearfix">
                                        <input type="password" name="password" value="<?php echo $password ;?>" placeholder="Пароль" required><br><br>
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Отправить</span></button>
                                    </div>
                                </form>
                                <?php endif;?>
                            </div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
