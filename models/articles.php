<?php
class Articles
{
    public static function createArticleByAdmin($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO articles '
                . '(title, short, cat, text)'
                . 'VALUES '
                . '(:title, :short, :cat, :text)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short', $options['short'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        $result->bindParam(':cat', $options['cat'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
   public static function deleteArticleByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM articles WHERE article_id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    
 public static function updateArticleByAdmin($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE articles SET  title = :title,  text = :text, short = :short, cat = :cat WHERE article_id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        $result->bindParam(':short', $options['short'], PDO::PARAM_STR);
         $result->bindParam(':cat', $options['cat'], PDO::PARAM_STR);
        return $result->execute();
    }
    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */  
public static function getArticlesById($id)
    {
        $id = intval($id);
        if ($id) {                        
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM articles WHERE article_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetch();
        }
    }
	public static function getArticlesList()
	{
	    $db = Db::getConnection();
	    $articlesList = array();
	    $result = $db->query('SELECT article_id, title, short, text, img, date FROM articles WHERE cat = "1" ORDER BY article_id');
	            $i = 0;
	            while($row = $result->fetch()) {
	                $articlesList[$i]['article_id'] = $row['article_id'];
	                $articlesList[$i]['title'] = $row['title'];
	                $articlesList[$i]['short'] = $row['short'];
	                $articlesList[$i]['text'] = $row['text'];
	                $articlesList[$i]['img'] = $row['img'];
	                $articlesList[$i]['date'] = $row['date'];
	                $i++;
	            }
	            return $articlesList;
	}
	public static function getUsefulList()
	{
	    $db = Db::getConnection();
	    $articlesList = array();
	    $result = $db->query('SELECT article_id, title, short, text, img, date FROM articles WHERE cat = "2" ORDER BY article_id');
	            $i = 0;
	            while($row = $result->fetch()) {
	                $articlesList[$i]['article_id'] = $row['article_id'];
	                $articlesList[$i]['title'] = $row['title'];
	                $articlesList[$i]['short'] = $row['short'];
	                $articlesList[$i]['text'] = $row['text'];
	                $articlesList[$i]['img'] = $row['img'];
	                $articlesList[$i]['date'] = $row['date'];
	                $i++;
	            }
	            return $articlesList;
	}
	  public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'noimg.jpg';

        // Путь к папке с товарами
        $path = '/views/lasertaq/images/articles_img/';

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