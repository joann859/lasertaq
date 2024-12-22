<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>


<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
 <section class="matches-section">
     	<div class="auto-container">
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				      <div class="column col-lg-12 col-md-12 col-sm-12 ">
						<div class="footer-widget newsletter-widget">
							<div class="footer-title">
                            	<h2>Редактировать пакет ID: <?php echo $id; ?></h2>
                            </div>
							<div class="text"></div>
						 
                    
                
                    
                        <ul>
                            
                        </ul>
                   			<div class="newsletter-form">
                                <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-group clearfix">
                                        <input type="text" name="name" value="<?php echo $product['title']; ?>" placeholder="Название" required></div>
                                        
                                        <div class="form-group clearfix">
                                        <textarea type="text" name="description" placeholder="Описание " required><?php echo $product['description']; ?></textarea></div>
                                        
                                        <div class="form-group clearfix">
                                        <input type="text" name="price" value="<?php echo $product['price']; ?>" placeholder="Стоимость" required></div>
                                        
                                         <div class="form-group clearfix">
                                        <input type="file" name="image" class="form-control"></div>
                                        
                                         <div class="form-group clearfix">
                                             <select name="status" class="form-control">
                              <option value="1" <?php if ($product['status'] == 1) echo 'selected = "selected"'; ?>>Отображать</option>
                              <option value="0" <?php if ($product['status'] == 0 ) echo 'selected = "selected"'; ?>>Скрыть</option>
                              </select>
                                         </div>
                                         
                                         <div class="form-group clearfix">
                                         <select name="category" class="form-control">
                                 <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <option value="<?php echo $category['category_id']; ?>" 
                                        <?php if ($product['cat'] == $category['category_id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                              </select>
                                         </div>
                                        
                                        <div class="form-group clearfix">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Сохранить</span></button>
                                    </div>
                                </form>
                               
                            </div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
				</div>   
			
				</div>   
					</div>   
					</section>
					
					
					<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
