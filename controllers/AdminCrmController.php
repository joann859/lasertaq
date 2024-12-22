<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/articles.php';
	require_once ROOT. '/models/category.php';
	require_once ROOT. '/models/search.php';
	require_once ROOT. '/models/order.php';
	require_once ROOT. '/models/matches.php';
	require_once ROOT. '/models/booking.php';
	require_once ROOT. '/models/crm.php';
	
	
	require_once ROOT. '/config/AdminBase.php';
class AdminCrmController extends AdminBase
{
    
    
    public function actionCrm($month){
        
        self::checkAdmin();
         
		 $crmData = array();
		 $crmData = CRM::getOrderListByAdmin($month);
		 $orderSum = CRM::getOrderSum($month);
		 $priceSum = 0;
		 $priceSum = CRM::getPriceSum($month);
		 
	 	  
    
        require_once ROOT. '/views/lasertaq/admin/admin_crm/index.php';
        return true;
    }
}