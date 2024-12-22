<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/category.php';

class CatalogController {
	public function actionIndex()
		{
			$podCategories = array();
			$podCategories = Category::getPodCategories($catalogId);
			
			$productsList = array();
			$productsList = Products::getProductsList();
			
			require_once ROOT. '/views/internet-magazin/catalog.php';
			
			
			return true;
		}
    public function actionCategory($categoryId)
		{
		    $categoryId = trim((strip_tags(stripcslashes(htmlspecialchars($categoryId)))));
		    $categories = array();
			$categories = Category::getCategoriesList();
			
			$categoryProducts = array();
			$categoryProducts = Products::getProductsListByCategory($categoryId);
			
			require_once ROOT. '/views/internet-magazin/category.php';
			
			
			return true;
		    
		}
}
 ?>