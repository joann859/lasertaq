<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/articles.php';
	require_once ROOT. '/models/category.php';
	require_once ROOT. '/models/search.php';
	require_once ROOT. '/config/AdminBase.php';
	require_once ROOT. '/models/order.php';
	require_once ROOT. '/models/booking.php';
class adminOrderController extends AdminBase
{
    
    
    
    public function actionProcessing($id){
            
            self::checkAdmin();
			$userOrder = Order::getOrderByNumber($id);
			
		    	if(isset($_POST['submit'])){
		          $options['status'] = $_POST['status'];
		          // Сохраняем изменения
            Order::Success($id, $options); 
            header("Location: /admin#order"); 
		}
		 
		
        require_once ROOT. '/views/lasertaq/admin/admin_order/processing.php';
         
         return true;
    }
      public function actionUserData($id){
            
            self::checkAdmin();
			$userData = User::getUserById($id);
            require_once ROOT. '/views/lasertaq/admin/admin_order/user_data.php';
         
         return true;
    }
    public function actionDelete($id){
            
            self::checkAdmin();
        
        if(isset($_POST['submit'])){
            
            Order::deleteOrderByAdmin($id);
            
            header("Location: /admin#order"); 
        }
        require_once ROOT. '/views/lasertaq/admin/admin_order/delete.php';
         return true;
    }
  
}
?>