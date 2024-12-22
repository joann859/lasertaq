<?php include ROOT. '/views/lasertaq/head.php'; ?>
  
<div class="sidebar-page-container">
        <div class="auto-container ">
            <div class="row clearfix ">

                <!--Content Side / Blog Detail-->
                <div class=" col-lg-12 col-md-12 col-sm-12 ">
                    

                    


                    <!-- Comments Area -->
                    
                    <div class="comments-area">
                        <?php if($search_result):?>
                        <div class="group-title"><h3>Результаты поиска</h3></div>
                        <div class="comment-box">
                             
                            <?php foreach ($search_result as $search): ?>
                            <!-- Author Box -->
                    <div class="author-box">
                        <div class="inner-box">
                            <figure class="thumb"><img src="" alt=""></figure>
                            <h3 class="name"><?php echo $search['title'];?></h3>
                            <div class="text"><?php echo $search['description']?> 
                        </div>
                    </div></div>
                            <?php endforeach; ?>
                            
                        </div>

                          <?php else:?> <div class="group-title"><h3>Ничего не найдено :( Попробуйте еще раз! </h3> 
                          <div class="sidebar-side col-lg-12 col-md-12 col-sm-12">
                    <aside class="sidebar">
                    	<!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="/search">
                                <div class="form-group">
                                    <input type="search" name="call" value="" placeholder="Поиск" required>
                                    <button type="submit" name="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        </aside>
                        </div>
                        </div>
                            <?php endif;?>
                    </div>

                     
                </div>

                
            </div>
        </div>
    </div>
  
	<?php include ROOT. '/views/lasertaq/footer.php'; ?>