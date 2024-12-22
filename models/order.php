<?php

class Order
{

  
    public static function getOrderList()
	{
	    
	    $db = Db::getConnection();
	    
	    $orderList = array();
	    
	
	    $result = $db->query("SELECT user_id,order_number,item_id FROM cart WHERE cart.status = 1");
	                    
	             $orderList=$result->fetchAll(PDO::FETCH_ASSOC);;
         
 
        
	            return $orderList;
	}
	public static function getOrderByNumber($id){
	    if ($id) {                        
            $db = Db::getConnection();
            
            $orderById = array();
	    
	
	    $result = $db->query("SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status != 0 AND cart.order_number = '$id'");
	    $result->setFetchMode(PDO::FETCH_ASSOC);                 
	            $i = 0;
	            
	            while($row = $result->fetch()) {
	                $orderById[$i]['item_id'] = $row['item_id'];
	                $orderById[$i]['user_id'] = $row['user_id'];
	                 $orderById[$i]['status'] = $row['status'];
	                $orderById[$i]['count_item'] = $row['count_item'];
	                $orderById[$i]['order_number'] = $row['order_number'];
	                $orderById[$i]['title'] = $row['title'];
	                $orderById[$i]['description'] = $row['description'];
	                $orderById[$i]['price'] = $row['price'];
	                 $orderById[$i]['date'] = $row['date'];
	                $i++;
	            }
	            return $orderById;
            
            
            
        }
	}
	public static function deleteOrderByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM cart WHERE order_number = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
     public static function Success($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE cart SET status = :status WHERE order_number = '$id'";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }
    }
   