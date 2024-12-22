<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>



 <section class="matches-section">
        <div class="auto-container">
            <!-- Matches Info Tabs-->
            <div class="matches-info-tabs">
                <!-- Matches Tabs-->
                <div class="matches-tabs tabs-box">
                      <div class="column col-lg-12 col-md-12 col-sm-12 ">
                        <div class="footer-widget newsletter-widget">
                            <div class="footer-title">
                                <h2>Создание пакета</h2>
                            </div>
                            <div class="text"></div>
                         
                    
                
                    
                        <ul>
                            
                        </ul>
                            <div class="newsletter-form">
                                <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-group clearfix">
                                        <input type="text" name="name" value="" placeholder="Название" required></div>
                                        <div class="form-group clearfix">
                                        <textarea type="text" name="description" value="" placeholder="Описание " required></textarea></div>
                                        <div class="form-group clearfix">
                                        <input type="text" name="price" value="" placeholder="Стоимость" required></div>
                                         <div class="form-group clearfix">
                                        <input type="file" name="image" class="form-control"><input type="file" name="image" class="form-control"></div>
                                         <div class="form-group clearfix">
                                             <select name="status" class="form-control">
                              <option value="1">Отображать</option>
                              <option value="0">Скрыть</option>
                              </select>
                                         </div>
                                    <div class="form-group clearfix">
                                          <select name="category" class="form-control">
                                  <?php if (is_array($categoryList)) : ?>
                                  <?php foreach ($categoryList as $category): ?>
                                     <option value="<?php echo $category['category_id']; ?>">
                                         <?php echo $category['name']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                              </select>
                                         </div>
                                        <div class="form-group clearfix">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Отправить</span></button>
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
                    
                    
                    <?php include ROOT. '/views/lasertaq/admin/footer.php'; ?>
