<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/articles.php';
	require_once ROOT. '/models/category.php';
	require_once ROOT. '/models/search.php';
	require_once ROOT. '/config/AdminBase.php';
class adminCategoryController extends AdminBase
{
    
    
    public function actionIndex(){
        
        self::checkAdmin();
        $categoryList = Category::getCategoriesListByAdmin();
        require_once ROOT. '/views/internet-magazin/admin/admin_category/index.php';
        return true;
    }
    
    
    public function actionDelete($id){
        self::checkAdmin();
        
        if(isset($_POST['submit'])){
            
            Category::deleteCategoryByAdmin($id);
            
            header("Location: /admin/category"); 
        }
        require_once ROOT. '/views/internet-magazin/admin/admin_category/delete.php';
         return true;
    }
    
    public function actionCreate(){
             self::checkAdmin();

        $categoryList = array();
			$categoryList = Category::getCategoriesListByAdmin();
			
		if(isset($_POST['submit'])){
		    $options['name'] = $_POST['name'];
		          $options['status'] = $_POST['status'];
		          
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
		     $errors[] = "Заполните поле имя";
		 }
		 if($errors == false) {
		     
		     $id = Category::createCategoryByAdmin($options);
		     
		     // Если запись добавлена
                if ($id) {
                    // echo  '<pre>'; print_r($_SERVER['DOCUMENT_ROOT']); die();
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/internet-magazin/img/category_img/{$id}.jpg");
                         
                        
                   }
                     
                };

                // Перенаправляем пользователя на страницу управлениями товарами
                //header("Location: /admin/product");
		 
		     
		     }
		 }
		 
		
        require_once ROOT. '/views/internet-magazin/admin/admin_category/create.php';
         
         return true;
    }
      
    public function actionEdit($id){
             self::checkAdmin();

         
			$category = Category::getCategoryById($id);
		
			
		if(isset($_POST['submit'])){
		    $options['name'] = $_POST['name'];
		          $options['status'] = $_POST['status'];
		          
		 $errors = false;
		 
		 // Сохраняем изменения
            if (Category::updateCategoryByAdmin($id, $options)) {

		        // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                 if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/internet-magazin/img/category_img/{$id}.jpg");
                         
                        
                   }
                     
		 }
		  header("Location: /admin/category");
		 }
		 
		
        require_once ROOT. '/views/internet-magazin/admin/admin_category/edit.php';
         
         return true;
    }
    
}
?>