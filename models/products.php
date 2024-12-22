<?php

class Products
{
    //Ограничитель
    const SHOW_BY_DEFAULT = 100;
    //Получаем товары из БД по идентификатору trands
    public static function getTrandsProducts($count = self::SHOW_BY_DEFAULT){
        $count = Intval($count);
        $db = Db::getConnection();
         $productsList = array();
         //SQL запрос в бд
        $result = $db->query('SELECT item_id, title, description, price, trands FROM products '
                . 'WHERE trands = "1" AND cat = "1"'
                
                . 'ORDER BY item_id DESC '                
                . 'LIMIT ' . $count
                );

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['item_id'] = $row['item_id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['trands'] = $row['trands'];
            $i++;
        }

        return $productsList;
    }
    public static function getTrandsProductsByLasertag($count = self::SHOW_BY_DEFAULT){
        $count = Intval($count);
        $db = Db::getConnection();
         $productsList = array();
         //SQL запрос в бд
        $result = $db->query('SELECT item_id, title, description, price, trands FROM products '
                . 'WHERE trands = "1" AND cat = "2"'
                
                . 'ORDER BY item_id DESC '                
                . 'LIMIT ' . $count
                );

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['item_id'] = $row['item_id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['description'] = $row['description'];

            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['trands'] = $row['trands'];
            $i++;
        }

        return $productsList;
    }
     public static function getTrandsProductsByWS($count = self::SHOW_BY_DEFAULT){
        $count = Intval($count);
        $db = Db::getConnection();
         $productsList = array();
         //SQL запрос в бд
        $result = $db->query('SELECT item_id, title, description, price, trands FROM products '
                . 'WHERE trands = "1" AND cat = "4"'
                
                . 'ORDER BY item_id DESC '                
                . 'LIMIT ' . $count
                );

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['item_id'] = $row['item_id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['description'] = $row['description'];

            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['trands'] = $row['trands'];
            $i++;
        }

        return $productsList;
    }
    public static function getTrandsProductsByPskov($count = self::SHOW_BY_DEFAULT){
        $count = Intval($count);
        $db = Db::getConnection();
         $productsList = array();
         //SQL запрос в бд
        $result = $db->query('SELECT item_id, title, description, price, trands FROM products '
                . 'WHERE trands = "1" AND cat = "3"'
                
                . 'ORDER BY item_id DESC '                
                . 'LIMIT ' . $count
                );

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['item_id'] = $row['item_id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['trands'] = $row['trands'];
            $i++;
        }

        return $productsList;
    }
    //Получаем товары в категорию соответствующие ей
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        //Проверяем соответствие категории
        if ($categoryId) {
            
            $page = intval($page);            
            
        
            $db = Db::getConnection();            
            $products = array();
            $result = $db->query("SELECT item_id, title, price, description FROM products "
                    . "WHERE status = '1' AND cat = '$categoryId' "
                    . "ORDER BY item_id ASC "                
                    . "LIMIT ".self::SHOW_BY_DEFAULT
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['item_id'] = $row['item_id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }

            return $products;       
        }
    }
    //Получаем товар для карточки по id
   public static function getProductsById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM products WHERE item_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
    
     public static function getPromoList()
    {
        $db = Db::getConnection();
        
        $promoList = array();
    
        $result = $db->query('SELECT promo_id, title, description FROM promo ORDER BY promo_id');
                        
                $i = 0;
                
                while($row = $result->fetch()) {
                    $promoList[$i]['promo_id'] = $row['promo_id'];
                    $promoList[$i]['title'] = $row['title'];
                    $promoList[$i]['description'] = $row['description'];
                    $i++;
                }
                return $promoList;
    }
    
    public static function getProductsListByCybertag()
    {
        
        $db = Db::getConnection();
        
        $productsList = array();
    
        $result = $db->query('SELECT item_id, title, description, price FROM products WHERE cat = "1" ORDER BY item_id');
                        
                $i = 0;
                
                while($row = $result->fetch()) {
                    $productsList[$i]['item_id'] = $row['item_id'];
                    $productsList[$i]['title'] = $row['title'];
                    $productsList[$i]['description'] = $row['description'];
                    $productsList[$i]['price'] = $row['price'];
                    $i++;
                }
                return $productsList;
    }
    public static function getProductsListByLasertag()
    {
        
        $db = Db::getConnection();
        
        $productsList = array();
    
        $result = $db->query('SELECT item_id, title, description, price FROM products WHERE cat = "2" ORDER BY item_id');
                        
                $i = 0;
                
                while($row = $result->fetch()) {
                    $productsList[$i]['item_id'] = $row['item_id'];
                    $productsList[$i]['title'] = $row['title'];
                    $productsList[$i]['description'] = $row['description'];
                    $productsList[$i]['price'] = $row['price'];
                    $i++;
                }
                return $productsList;
    }
    public static function getProductsListByAdmin()
    {
        
        $db = Db::getConnection();
        
        $productsList = array();
    
        $result = $db->query('SELECT item_id, title, description, price FROM products ORDER BY item_id ');
                        
                $i = 0;
                
                while($row = $result->fetch()) {
                    $productsList[$i]['item_id'] = $row['item_id'];
                    $productsList[$i]['title'] = $row['title'];
                    $productsList[$i]['description'] = $row['description'];
                    $productsList[$i]['price'] = $row['price'];
                    $i++;
                }
                return $productsList;
    }
    public static function getProductsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode('', $idsArray);

        $sql = "SELECT * FROM products WHERE status='1' AND item_id IN ($idsString)";

        $result = $db->query($sql);        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['item_id'] = $row['item_id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }

        return $products;
    }
        public static function getPromo()
    {
        $promoList = array();
        
        $db = Db::getConnection();
        
         

        $sql = "SELECT * FROM promo ";

        $result = $db->query($sql);        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $promoList[$i]['title'] = $row['title'];
            $promoList[$i]['date'] = $row['date'];
            $promoList[$i]['description'] = $row['description'];
            $promoList[$i]['sum'] = $row['sum'];
            $i++;
        }

        return $promoList;
    
    }
    public static function deleteProductByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM products WHERE item_id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    
   public static function createProductByAdmin($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO products '
                . '(title, description, price, cat, status)'
                . 'VALUES '
                . '(:title, :description, :price, :category, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category', $options['category'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
    
     public static function updateProductByAdmin($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE products SET  title = :title,  description = :description, price = :price, cat = :category, status = :status WHERE item_id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category', $options['category'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }
    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'noimg.jpg';

        // Путь к папке с товарами
        $path = '/views/lasertaq/images/products_img/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
    

}
