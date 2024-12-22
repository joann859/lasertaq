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
class AdminController extends AdminBase
{
    
    
    public function actionIndex(){
        
        self::checkAdmin();
         $blog = array();
         $blog = Articles::getArticlesList();
         $productsList = array();
         $productsList = Products::getProductsListByAdmin();
         $orderList = array();
         $orderList = Order::getOrderList();
         $oldMatches = array();
		 $oldMatches = Matches::getOldMatchesList();
		 $bookingList = array();
		 $bookingList = Book::getBookingListByAdmin();
 
	 	  
    
        require_once ROOT. '/views/lasertaq/admin/index.php';
        return true;
    }
   
}