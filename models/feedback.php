<?php

class Feedback
{
   	public static function getFeedbackList()
	{
	    
	    $db = Db::getConnection();
	    
	    $feedbackList = array();
	
	    $result = $db->query('SELECT name, text, date FROM feedback ORDER BY feedback_id ');
	                    
	            $i = 0;
	            
	            while($row = $result->fetch()) {
	                $feedbackList[$i]['name'] = $row['name'];
	                $feedbackList[$i]['text'] = $row['text'];
	                $feedbackList[$i]['date'] = $row['date'];
	                $i++;
	            }
	            return $feedbackList;
	} 
		public static function getNewFeedback()
	{
	    
	    $db = Db::getConnection();
	    
	    $feedbackList = array();
	
	    $result = $db->query('SELECT name, text, date FROM feedback ORDER BY date LIMIT 5 ');
	                    
	            $i = 0;
	            
	            while($row = $result->fetch()) {
	               
	                $feedbackList[$i]['name'] = $row['name'];
	                $feedbackList[$i]['text'] = $row['text'];
	                $feedbackList[$i]['date'] = $row['date'];
	                $i++;
	            }
	            return $feedbackList;
	} 
	public static function createFeedback($options)
    {
       
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO feedback '
                . '(name, text )'
                . 'VALUES '
                . '(:name, :text)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
}
?>