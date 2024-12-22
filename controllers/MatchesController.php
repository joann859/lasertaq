<?php
require_once ROOT. '/models/cart.php';
include_once ROOT. '/models/user.php';
include_once ROOT. '/models/matches.php';


class MatchesController {

 
 
	public function actionMatches()
		{
		$oldMatches = array();
		$oldMatches = Matches::getOldMatchesList();
		 
	    require_once ROOT. '/views/lasertaq/matches.php';

		return true;
		}	
	

		
}
 ?>