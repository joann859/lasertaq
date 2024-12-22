<?php

class Cart
{

    /**
     * Добавление товара в корзину (сессию)
     * @param int $id
     */
    public static function addProducts($id)
    { 
         // Если товар есть в корзине, но был добавлен еще раз, увеличим количество
        $db = Db::getConnection();
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
        $sql = 'SELECT COUNT(*) FROM cart WHERE item_id = :item_id AND user_id = :user_id AND status = 0';
        
        $result = $db->prepare($sql);
        $result->bindParam(':item_id', $id, PDO::PARAM_STR);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()) {
         $db = Db::getConnection();
         $sql = "UPDATE `cart` SET `count_item`=`count_item`+ (1) WHERE user_id= '$user_id' AND item_id = '$id'" ;
         $result = $db->prepare($sql);
        return $result->execute();
        }else{
        //Добавляем товар в корзину
        $id = intval($id);
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
            $result = $db->query('SELECT cat FROM products WHERE item_id =' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $cat = implode($result->fetch());
        
        
        $status = 0;
        
        $sql = 'INSERT INTO cart (user_id, item_id, status, cat ) '
                . 'VALUES (:user_id, :item_id, :status, :cat)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':item_id', $id, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_STR);
         $result->bindParam(':cat', $cat, PDO::PARAM_STR);

        return $result->execute();
       
        }
 }


   public static function getProducts()
    { 
        $db = Db::getConnection();
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
         $productsInCartList = array();
         //SQL запрос в бд
        $result = $db->query("SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status != 2 AND cart.user_id = '$user_id'" );
                             //SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status = 1
        
            $productsInCartList=$result->fetchAll(PDO::FETCH_ASSOC);;
         
 
        return $productsInCartList;

       
    }
    public static function getOrders()
    { 
        $db = Db::getConnection();
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
         $productsInCartList = array();
         //SQL запрос в бд
        $result = $db->query("SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status = 2 AND cart.user_id = '$user_id'" );
                             //SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status = 1
        
            $productsInCartList=$result->fetchAll(PDO::FETCH_ASSOC);;
         
 
        return $productsInCartList;

       
    }
    public static function getOrderByNumber($order_number)
    { 
        $db = Db::getConnection();
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
         $orderByNumber = array();
         //SQL запрос в бд
        $result = $db->query("SELECT * FROM cart WHERE cart.order_number = '$order_number'" );
                             //SELECT * FROM products INNER JOIN cart ON products.item_id = cart.item_id WHERE cart.status = 1
        
            $orderByNumber=$result->fetchAll(PDO::FETCH_ASSOC);;
         
 
        return $orderByNumber;

       
    }
      
     public static function Checkout($options)
    {
        
        // Соединение с БД
        $db = Db::getConnection();
          
        // Текст запроса к БД
        $sql = "UPDATE cart SET status = 1, date = :date WHERE order_number = :order_number";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':order_number',$options['order_number'], PDO::PARAM_INT);
        $result->bindParam(':date',  $options['date'], PDO::PARAM_INT);
        
        return $result->execute();
     
    }
   
     /*public static function Checkout($order_number)
    {
        $order_number = intval($order_number);
        // Соединение с БД
       $db = Db::getConnection();
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
        $status = 1;
        // Текст запроса к БД
        $db = Db::getConnection();
         $sql = "UPDATE `cart` SET `status` = 1 WHERE `order_number` = '$order_number' " ;
         $result = $db->prepare($sql);
        return $result->execute();
        
    }
    */
    public static function delProducts($id)
    {
        $id = intval($id);
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }
         $db = Db::getConnection();
        $sql = "DELETE FROM cart WHERE item_id = $id AND user_id = '$user_id' ";
        
        $result = $db->prepare($sql);
        $result->bindParam(':item_id', $id, PDO::PARAM_STR);

        return $result->execute();
       
        }
            
    }
   