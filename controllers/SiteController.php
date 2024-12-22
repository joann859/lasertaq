<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/articles.php';
	require_once ROOT. '/models/category.php';
	require_once ROOT. '/models/gallery.php';
	require_once ROOT. '/models/matches.php';
	require_once ROOT. '/models/feedback.php';
	require_once ROOT. '/models/search.php';

class SiteController {
	public function actionIndex()
		{
			$categories = array();
			$categories = Category::getCategoriesList();
			
			$trandsProducts = array();
			$trandsProducts = Products::getTrandsProducts(20);
		
			$oldMatches = array();
			$oldMatches = Matches::getOldMatchesList();

			$feedbackList = array();
			$feedbackList = Feedback::getNewFeedback();
			
			$photoCybertag = array();
			$photoCybertag = Gallery::getPhotoListByCybertag();
			
			 
			 if(isset($_POST['submit-support'])){
			$options['name'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name']))))); 
			 $options['tel'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['tel'])))));
			  $options['message'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['message'])))));
			   
				  
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
			 $errors[] = "Заполните поле имя";
		 }
		 if(!isset($options['tel']) || empty($options['tel'])) {
			 $errors[] = "Заполните поле телефон";
		 }
		 if(!isset($options['message']) || empty($options['message'])) {
			 $errors[] = "Заполните поле сообщение";
		 }
		 if($errors == false) {
			 
			 $id = User::Speed($options);
			 
			 

				// Перенаправляем пользователя на страницу управлениями товарами
			  header("Location: /");
		 
			
			 }
		 }
			
			require_once ROOT. '/views/lasertaq/index.php';
			
			return true;
		}
		 
	public function actionLasertag()
		{
			$trandsProducts = array();
			$trandsProducts = Products::getTrandsProductsByLasertag(20);
			
			$photoLasertag = array();
			$photoLasertag = Gallery::getPhotoListByLasertag();
			
			$feedbackList = array();
			$feedbackList = Feedback::getNewFeedback();
			
			 if(isset($_POST['submit-support'])){
			$options['name'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name']))))); 
			 $options['tel'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['tel'])))));
			  $options['message'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['message'])))));
			   
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
			 $errors[] = "Заполните поле имя";
		 }
		 if(!isset($options['tel']) || empty($options['tel'])) {
			 $errors[] = "Заполните поле email";
		 }
		 if(!isset($options['message']) || empty($options['message'])) {
			 $errors[] = "Заполните поле сообщение";
		 }
		 if($errors == false) {
			 $id = User::Speed($options);
				// Перенаправляем пользователя на страницу управлениями товарами
				header("Location: /lasertag");
			 }
		 }
			require_once ROOT. '/views/lasertaq/lasertag.php';
			return true;
		}		
	public function actionWarstation()
		{
			//$trandsProducts = array();
			//$trandsProducts = Products::getTrandsProductsByWarstation(20);
			
			$photoWarstation = array();
			$photoWarstation = Gallery::getPhotoListByWarstation();
			
			$feedbackList = array();
			$feedbackList = Feedback::getNewFeedback();
			
			$trandsProducts = array();
			$trandsProducts = Products::getTrandsProductsByWS(20);
			
			 if(isset($_POST['submit-support'])){
			$options['name'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name']))))); 
			 $options['tel'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['tel'])))));
			  $options['message'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['message'])))));
			   
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
			 $errors[] = "Заполните поле имя";
		 }
		 if(!isset($options['tel']) || empty($options['tel'])) {
			 $errors[] = "Заполните поле email";
		 }
		 if(!isset($options['message']) || empty($options['message'])) {
			 $errors[] = "Заполните поле сообщение";
		 }
		 if($errors == false) {
			 $id = User::Speed($options);
				// Перенаправляем пользователя на страницу управлениями товарами
				header("Location: /warstation");
			 }
		 }
			require_once ROOT. '/views/lasertaq/warstation.php';
			return true;
		}		
	public function actionPskov()
		{
			$trandsProducts = array();
			$trandsProducts = Products::getTrandsProductsByPskov(20);
			$photoLasertag = array();
			$photoLasertag = Gallery::getPhotoListByPskov();
				$feedbackList = array();
			$feedbackList = Feedback::getNewFeedback();
		 if(isset($_POST['submit-support'])){
			$options['name'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name']))))); 
			 $options['tel'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['tel'])))));
			  $options['message'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['message'])))));
			   
				  
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
			 $errors[] = "Заполните поле имя";
		 }
		 if(!isset($options['email']) || empty($options['email'])) {
			 $errors[] = "Заполните поле email";
		 }
		 if(!isset($options['message']) || empty($options['message'])) {
			 $errors[] = "Заполните поле сообщение";
		 }
		 if($errors == false) {
			 
			 $id = User::Support($options);
			 
			 

				// Перенаправляем пользователя на страницу управлениями товарами
				header("Location: /");
		 
			
			 }
		 }
			require_once ROOT. '/views/lasertaq/pskov.php';
			
			return true;
		}
 
	public function actionSearch()
	{
		$search_result = array();
		$search_result = Search::getProductsBySearch();
		
		require_once ROOT. '/views/lasertaq/search.php';
		
		
			return true;
	}
 
	public function actionFaq()
		{
	
	   require_once ROOT. '/views/lasertaq/faq.php';
		return true;
}
public function actionPromo()
		{
	  $promoList = array();
		$promoList = Products::getPromo();
	   require_once ROOT. '/views/lasertaq/promo.php';
		return true;
	   
}
   public function actionContacts()
		{
		if(isset($_POST['submit-support'])){
			$options['name'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name']))))); 
			 $options['email'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['email'])))));
			  $options['message'] = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['message'])))));
			   
				  
		 $errors = false;
		 
		 if(!isset($options['name']) || empty($options['name'])) {
			 $errors[] = "Заполните поле имя";
		 }
		 if(!isset($options['email']) || empty($options['email'])) {
			 $errors[] = "Заполните поле email";
		 }
		 if(!isset($options['message']) || empty($options['message'])) {
			 $errors[] = "Заполните поле сообщение";
		 }
		 if($errors == false) {
			 
			 $id = User::Support($options);
			 
			 

				// Перенаправляем пользователя на страницу управлениями товарами
				header("Location: /");
		 
			
			 }
		 }
	   require_once ROOT. '/views/lasertaq/contacts.php';
		return true;
}
 
}

?>