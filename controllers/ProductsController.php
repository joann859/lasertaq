
<?php
require_once ROOT. '/models/cart.php';
include_once ROOT. '/models/products.php';
include_once ROOT. '/models/user.php';


class ProductsController {

 
 
	public function actionView($productId)
		{
		$productId = trim((strip_tags(stripcslashes(htmlspecialchars($productId)))));    
		$product = Products::getProductsById($productId);
		$trandsProducts = array();
		$trandsProducts = Products::getTrandsProducts(20);
		$promoList = array();
		$promoList = Products::getPromoList();
		require_once ROOT. '/views/lasertaq/packages/view.php';
			 
		return true;
		}	
		public function actionCybertag()
	{
		$packList = array();
			$packList = Products::getProductsListByCybertag();
			 require_once ROOT. '/views/lasertaq/packages/cybertag.php';
		
	}	
		public function actionLasertag()
	{
		$packList = array();
			$packList = Products::getProductsListByLasertag();
			 require_once ROOT. '/views/lasertaq/packages/lasertag.php';
		
	}	
		public function actionPskov()
	{
		$packList = array();
			$packList = Products::getProductsListByPskov();
			 require_once ROOT. '/views/lasertaq/packages/pskov.php';
		
	}	
			public function actionWarstation()
	{
		$packList = array();
			//$packList = Products::getProductsListByPskov();
			 require_once ROOT. '/views/lasertaq/packages/warstation.php';
		
	}	

		
}
 ?>