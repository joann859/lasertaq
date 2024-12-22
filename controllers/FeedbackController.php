<?php
 
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/search.php';
	require_once ROOT. '/config/AdminBase.php';
	require_once ROOT. '/models/feedback.php';
	require_once ROOT. '/models/articles.php';
class FeedbackController {


    
    
    public function actionIndex(){
        
        
        $feedbackList = Feedback::getFeedbackList();
        	if(isset($_POST['submit'])){
		    $options['name'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name'])))));
		     $options['text'] =  trim((strip_tags(stripcslashes(htmlspecialchars($_POST['text'])))));
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
		     $errors[] = "Заполните поле имя";
		 }
		 if($errors == false) {
		     
		     $id = Feedback::createFeedback($options);
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /feedback");
		 
		    
		     }
		 }
		 
        require_once ROOT. '/views/lasertaq/feedback.php';
        return true;
    }
    
     public function actionCreate(){
		if(isset($_POST['submit'])){
		    $options['name'] = $_POST['name'];
		     $options['text'] = $_POST['text'];
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
		     $errors[] = "Заполните поле имя";
		 }
		 if($errors == false) {
		     
		     $id = Feedback::createFeedback($options);
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /feedback");
		 
		    
		     }
		 }
		 
		
        require_once ROOT. '/views/lasertaq/feedback.php';
         
         return true;
    }
      
}