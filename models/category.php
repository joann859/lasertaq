<?php

class Category
{

    /**
     * Returns an array of categories
     */
    public static function getCategoriesList()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT category_id, name, status FROM category '
                    . 'WHERE status = 1');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['category_id'] = $row['category_id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }

        return $categoryList;
    }
     public static function getCategoryById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM category WHERE category_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
    public static function getCategoriesListByAdmin()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT category_id, name, status FROM category');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['category_id'] = $row['category_id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }

        return $categoryList;
    }
     public static function deleteCategoryByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM category WHERE category_id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    public static function createCategoryByAdmin($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO category '
                . '(name, status)'
                . 'VALUES '
                . '(:name, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
     public static function updateCategoryByAdmin($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE category SET  name = :name, status = :status WHERE category_id = :category_id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
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
        $path = '/views/internet-magazin/img/category_img/';

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
    

    public static function getPodCategories($catalogId = false, $page = 1)
    {  
       if ($catalogId) {
            
            $page = intval($page);            
            
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query("SELECT category_id, name, category_img FROM podcategory "
                . "WHERE sort = '$catalogId' " );

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['category_id'] = $row['category_id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['category_img'] = $row['category_img'];
            $i++;
        }

        return $categoryList;
    }
    }
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        //Проверяем соответствие категории
        if ($categoryId) {
            
            $page = intval($page);            
            
        
            $db = Db::getConnection();            
            $products = array();
            $result = $db->query("SELECT item_id, title, price, img1, img2, description FROM products "
                    . "WHERE status = '1' AND cat = '$categoryId' "
                    . "ORDER BY item_id ASC "                
                    . "LIMIT ".self::SHOW_BY_DEFAULT
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['item_id'] = $row['item_id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['img1'] = $row['img1'];
                $products[$i]['img2'] = $row['img2'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }

            return $products;       
        }
    }
    }

