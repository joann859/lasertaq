<?php

class CRM
{

  
    public static function getOrderListByAdmin($month)
	{
	    
	    $db = Db::getConnection();
	    
	    $orderList = array();
	    $to = "2022-0$month-01 00:00:00";
	    $do = "2022-0$month-31 00:00:00";
	
	    $result = $db->query("SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status = 2 AND cart.date BETWEEN '$to' AND '$do';");
	                    
	             $i = 0;
	            
	            while($row = $result->fetch()) {
	                $orderList[$i]['title'] = $row['title'];
	                $orderList[$i]['price'] = $row['price'];
	                  
	                $i++;
	                
	            }  
	            
	   $result = $db->query("SELECT * FROM user INNER JOIN cart ON user.user_id = cart.user_id WHERE cart.status = 2 AND cart.date BETWEEN '$to' AND '$do';");
	                    
	             $i = 0;
	            
	            while($row = $result->fetch()) {
	                $orderList[$i]['user_id'] = $row['user_id'];
	                $orderList[$i]['name'] = $row['name'];
	                 $orderList[$i]['tel'] = $row['tel'];
	                  $orderList[$i]['email'] = $row['email'];
	                   $orderList[$i]['date'] = $row['date'];
	                $i++;
	                
	            }  
	  
	            
	            return $orderList;
          
         
	}
 
	public static function getOrderSum($month){
	                      
            $db = Db::getConnection();
            
             $to = "2022-0$month-01 00:00:00";
	    $do = "2022-0$month-31 00:00:00";
	         $result = $db->query("SELECT sum(count_item) count_item FROM cart WHERE status = 2 AND cart.date BETWEEN '$to' AND '$do';");
	         $orderSum = $result->fetchAll(PDO::FETCH_ASSOC);
	         return $orderSum;
	}
	 
	public static function getPriceSum($month){
	                      
           $db = Db::getConnection();
	    
	    $priceSum = 0;
	    $to = "2022-0$month-01 00:00:00";
	    $do = "2022-0$month-31 00:00:00";
	
	    $result = $db->query("SELECT sum(price) price FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status = 2 AND cart.date BETWEEN '$to' AND '$do';");
	                    
	             $priceSum = $result->fetchAll(PDO::FETCH_ASSOC);
	         return $priceSum;
	}
	public static function deleteOrderByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM cart WHERE order_number = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    }
   