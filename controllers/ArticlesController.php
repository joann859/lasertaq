<?php
require_once ROOT. '/models/cart.php';
include_once ROOT. '/models/articles.php';
include_once ROOT. '/models/user.php';


class ArticlesController {

    
	public function actionView($articleId)
		{
		    $articleId = trim((strip_tags(stripcslashes(htmlspecialchars($artcileId)))));
		$article = Articles::getArticlesById($articleId);
		
		$articles = Articles::getArticlesList();
	    require_once ROOT. '/views/lasertaq/blog/view.php';
		return true;
		}	
	public function actionIndex()
		{
		$articles = Articles::getArticlesList();
	    require_once ROOT. '/views/lasertaq/blog/index.php';
		return true;
		}	
	public function actionUseful()
		{
		$articles = Articles::getUsefulList();
	    require_once ROOT. '/views/lasertaq/blog/useful.php';
		return true;
		}			

		
}
 ?>