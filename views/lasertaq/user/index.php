<?php include ROOT. '/views/lasertaq/head.php'; ?>
<section class="matches-section">
		<div class="auto-container">
			 
<?php if($user['access'] == 'admin'): ?>
<div class="form-group clearfix">
<a href="/admin"><button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Панель администратора</span></button></a>
                                    </div>
<?php else:?>
<!-- Sec Title -->
			<div class="sec-title centered">
	<div class="title">Привет <?php echo $user['name'];?> !</div>
	<a href="/account/edit"><button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Изменить данные</span></button></a>
</div>
<?php endif;?>
<?php include ROOT. '/views/lasertaq/footer.php'; ?>
