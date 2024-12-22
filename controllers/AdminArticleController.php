<?php
	require_once ROOT. '/models/articles.php';
	require_once ROOT. '/config/AdminBase.php';
class adminArticleController extends AdminBase
{
    
    
    public function actionIndex(){
        
        self::checkAdmin();
        $articlesList = Articles::getArticlesList();
        require_once ROOT. '/views/lasertaq/admin/admin_blog/index.php';
        return true;
    }
    
    
    public function actionDelete($id){
        self::checkAdmin();
        
        if(isset($_POST['submit'])){
            
            Articles::deleteArticleByAdmin($id);
            
            header("Location: /admin/article/"); 
        }
        require_once ROOT. '/views/lasertaq/admin/admin_blog/delete.php';
         return true;
    }
    
    public function actionCreate(){
             self::checkAdmin();

		if(isset($_POST['submit'])){
		    $options['title'] = $_POST['title'];
		     $options['text'] = $_POST['text'];
		      $options['short'] = $_POST['short'];
		       $options['cat'] = $_POST['cat'];
		       
		          
		          
		 $errors = false;
		 
		 if(!isset($options['title']) || empty($options['title'])) {
		     $errors[] = "Заполните поле заголовок";
		 }
		 if($errors == false) {
		     
		     $id = Articles::createArticleByAdmin($options);
		     
		     // Если запись добавлена
                if ($id) {
                    // echo  '<pre>'; print_r($_SERVER['DOCUMENT_ROOT']); die();
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/lasertaq/images/articles_img/{$id}.jpg");
                         
                        
                   }
                     
                };

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/article");
		 
		    
		     }
		 }
		 
		
        require_once ROOT. '/views/lasertaq/admin/admin_blog/create.php';
         
         return true;
    }
      
   public function actionEdit($id){
             self::checkAdmin();

         
		 
			$article = Articles::getArticlesById($id);
			
		if(isset($_POST['submit'])){
		    $options['title'] = $_POST['title'];
		     $options['text'] = $_POST['text'];
		      $options['short'] = $_POST['short'];
		       $options['cat'] = $_POST['cat'];
		          
		          
		 $errors = false;
		 
		 // Сохраняем изменения
            if (Articles::updateArticleByAdmin($id, $options)) {

		        // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                 if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/lasertaq/images/articles_img/{$id}.jpg");
                         
                        
                   }
                     
		 }
		  header("Location: /admin");
		 }
		 
		
        require_once ROOT. '/views/lasertaq/admin/admin_blog/edit.php';
         
         return true;
    }
    
}
?>