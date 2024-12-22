<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/articles.php';
	require_once ROOT. '/models/category.php';
	require_once ROOT. '/models/search.php';
		require_once ROOT. '/models/matches.php';
	require_once ROOT. '/config/AdminBase.php';
class adminMatchesController extends AdminBase

{

     public function actionCreate(){
         self::checkAdmin();
			
		if(isset($_POST['submit'])){
		    $options['command_a'] = $_POST['command_a'];
		     $options['command_b'] = $_POST['command_b'];
		      $options['result_a'] = $_POST['result_a'];
		       $options['result_b'] = $_POST['result_b'];
		     
		     $id = Matches::createMatchByAdmin($options);
		     
                // Перенаправляем пользователя на страницу управлениями матчами
                header("Location: /admin");
		 }
		 
        require_once ROOT. '/views/lasertaq/admin/admin_matches/create.php';
         
         return true;
    }
     public function actionEdit($id){
             self::checkAdmin();

         
		
			$matches = Matches::getMatchById($id);
			
		if(isset($_POST['submit'])){
		    $options['command_a'] = $_POST['command_a'];
		     $options['command_b'] = $_POST['command_b'];
		      $options['result_a'] = $_POST['result_a'];
		       $options['result_b'] = $_POST['result_b'];
		          
		 
		 
		 // Сохраняем изменения
            Matches::updateMatchByAdmin($id, $options);

		       
		  header("Location: /admin");
		 }
		 
		
        require_once ROOT. '/views/lasertaq/admin/admin_matches/edit.php';
         
         return true;
    }
    
    public function actionDelete($id){
            
            self::checkAdmin();
        
        if(isset($_POST['submit'])){
            
            Matches::deleteMatchByAdmin($id);
            
            header("Location: /admin"); 
        }
        require_once ROOT. '/views/lasertaq/admin/admin_matches/delete.php';
         return true;
    }
 
	public function actionMatches()
		{
		$oldMatches = array();
		$oldMatches = Matches::getOldMatchesList();
		 
	    require_once ROOT. '/views/lasertaq/matches.php';

		return true;
		}	
	
     
		
}
 ?>