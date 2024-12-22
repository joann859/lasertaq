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
class adminBookingController extends AdminBase
{
    
    public function actionDelete($id){
            
            self::checkAdmin();
        
        if(isset($_POST['submit'])){
            
            Book::deleteDateByAdmin($id);
            
            header("Location: /admin"); 
        }
        require_once ROOT. '/views/lasertaq/admin/admin_booking/delete.php';
         return true;
    }
    
     public function actionCreate(){
             self::checkAdmin();
		$msg = "Создание дат для бронирования";	
		 $categoryList = array();
			$categoryList = Category::getCategoriesListByAdmin();
		if(isset($_POST['submit'])){
		    $options['date'] = $_POST['date'];
		    $options['cat'] = $_POST['cat'];
		          
		 $errors = false;
		 
		 if(!isset($options['date']) || empty($options['date'])) {
		     $errors[] = "Заполните поле дата";
		 }
		 if($errors == false) {
		     
		     $id = Book::createDateByAdmin($options);
		     
		     $msg = "Дата создана, можно продолжать";
		     
                // Перенаправляем пользователя на страницу управлениями товарами
                //header("Location: /admin#packages");
		 
		    
		     }
		 }
		 
		
        require_once ROOT. '/views/lasertaq/admin/admin_booking/create.php';
         
         return true;
    }
  
}
?>