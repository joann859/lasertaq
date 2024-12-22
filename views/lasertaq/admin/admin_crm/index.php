<?php include ROOT. '/views/lasertaq/admin/head.php'; ?>
 <style>
     
.pie-container {
    position: relative;
    float: left;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.8);
    margin:3%;
}

.pie-container::after{
    content: "";
    position: absolute;
    top: 25%;
    left: 25%;
    z-index: 50;
    width: 50%;
    height: 50%;
    color: white;
    background-color: #f5f5f5;
    border-radius: 50%;
    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.8);
}

.pie{
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #aaaaaa;
    border-radius: 50%;
    clip: rect(0px, 75px, 150px, 0px);
     
}

#val {
    z-index: 30;
    background-color: white;
    transform: rotate(<?php foreach ($orderSum as $sum): ?><?php echo 360/10*$sum['count_item'];?><? endforeach ;?>deg);
}
#sum {
    z-index: 40;
    background-color: red;
    transform: rotate(<?php foreach ($priceSum as $price): ?><?php echo 100/10000*$price['price'];?><? endforeach ;?>deg);
}
 </style>

 
<section class="matches-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Аналитика</div>
			 
			</div>
			
			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-boxs">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
					    <li   class="tab-btn"><a href="#"><span>All</span></a></li>
						<li  class="tab-btn"><span><a href="/admin/crm/1">Jan.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/2">Feb.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/3">Mar.</a></span></li>
						<li  class="tab-btn"><span><a href="/admin/crm/4">Apr.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/5">May.</a></span></li>
						<li  class="tab-btn"><span><a href="/admin/crm/6">Jun.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/7">Jul.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/8">Aug.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/9">Sep.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/10">Oct.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/11">Nov.</a></span></li>
						<li   class="tab-btn"><span><a href="/admin/crm/12">Dec.</a></span></li>
				 
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="all">
							<div class="content">
							     
								<!-- Matches Block -->
								<div class="match-single">
								    	<div class="title-box">
									 
											
									 
									<table >
                                     <thead>
                                       <tr>
                                        <td><h4> Клиент ID:</h4> </td>
                                        <td><h4> Имя: </h4> </td> 
                                        <td><h4> Телефон:</h4>  </td>
                                        <td><h4> Почта: </h4> </td> 
                                        <td><h4> Дата: </h4> </td> 
                                        <td><h4> Сумма: </h4> </td> 
                                        <td><h4> Пакет: </h4> </td> 
                                       </tr> 
                                      </thead>
                                      <tbody>
                                           <?php foreach ($crmData as $order): ?>
                                        <tr>
                                         <td><h5><?php echo $order['user_id'];?></h5> </td>
                                        <td><h5> <?php echo $order['name'];?> </h5> </td> 
                                        <td><h5> <?php echo $order['tel'];?> </h5> </td>
                                        <td><h5> <?php echo $order['email'];?> </h5> </td> 
                                        <td><h5> <?php echo $order['date'];?> </h5> </td> 
                                        <td><h5> <?php echo $order['price'];?> </h5> </td> 
                                        <td><h5> <?php echo $order['title'];?> </h5> </td> 
                                        </tr> 
                                         <? endforeach ;?>
                                       </tbody><div class="pie-container">
                    <div id="sum" class="pie"> </div>
                     <div id="val" class="pie"> </div>
                    
                     
                </div>
                                      </table>	  
    </div>
										</div>
									</div>
								</div>
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
	<!-- End Matches Section -->

<?php include ROOT. '/views/lasertaq//admin/footer.php'; ?>
