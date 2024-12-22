<?php

class Search
{ 
    public static function getProductsBySearch()
    {
        
        $db = Db::getConnection();
        if(isset($_POST['submit'])){
            $search = $_POST['call'];
            $search = trim((strip_tags(stripcslashes(htmlspecialchars($search)))));
            $db = Db::getConnection();
	        $productsList = array();
	     //SQL запрос в бд
	    $result = $db->query("SELECT * FROM products WHERE title LIKE '%$search%' OR description LIKE '%$search%'");
                              
               

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['item_id'] = $row['item_id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['description'] = $row['description'];
            $i++;
        }

        return $productsList;
    
        }

       
        
    
           
         
        
        
               
    }

}