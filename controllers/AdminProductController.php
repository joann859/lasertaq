<?php
include_once ROOT. '/models/products.php';
    require_once ROOT. '/models/user.php';
    require_once ROOT. '/models/cart.php';
    require_once ROOT. '/models/articles.php';
    require_once ROOT. '/models/category.php';
    require_once ROOT. '/models/search.php';
    require_once ROOT. '/config/AdminBase.php';
class adminProductController extends AdminBase
{
    
    
  
    public function actionDelete($id){
        self::checkAdmin();
        
        if(isset($_POST['submit'])){
            
            Products::deleteProductByAdmin($id);
            
            header("Location: /admin#packages"); 
        }
        require_once ROOT. '/views/lasertaq/admin/admin_product/delete.php';
         return true;
    }
    
    public function actionCreate(){
             self::checkAdmin();

        $categoryList = array();
            $categoryList = Category::getCategoriesListByAdmin();
            
        if(isset($_POST['submit'])){
            $options['name'] = $_POST['name'];
             $options['description'] = $_POST['description'];
              $options['price'] = $_POST['price'];
               $options['category'] = $_POST['category'];
                  $options['status'] = $_POST['status'];
                  
         $errors = false;
         
         if(!isset($options['name']) || empty($options['name'])) {
             $errors[] = "Заполните поле имя";
         }
         if($errors == false) {
             
             $id = Products::createProductByAdmin($options);
             
             // Если запись добавлена
                if ($id) {
                    // echo  '<pre>'; print_r($_SERVER['DOCUMENT_ROOT']); die();
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/lasertaq/images/products_img/{$id}.jpg");
                         
                        
                   }
                     
                };

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/package/create");
         
            
             }
         }
         
        
        require_once ROOT. '/views/lasertaq/admin/admin_product/create.php';
         
         return true;
    }
      
    public function actionEdit($id){
             self::checkAdmin();

         
            $categoryList = Category::getCategoriesListByAdmin();
            $product = Products::getProductsById($id);
            
        if(isset($_POST['submit'])){
            $options['name'] = $_POST['name'];
             $options['description'] = $_POST['description'];
              $options['price'] = $_POST['price'];
               $options['category'] = $_POST['category'];
                  $options['status'] = $_POST['status'];
                  
         $errors = false;
         
         // Сохраняем изменения
            if (Products::updateProductByAdmin($id, $options)) {

                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                 if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/lasertaq/images/products_img/{$id}.jpg");
                         
                        
                   }
                     
         }
          header("Location: /admin#packages");
         }
         
        
        require_once ROOT. '/views/lasertaq/admin/admin_product/edit.php';
         
         return true;
    }
    
}
?>