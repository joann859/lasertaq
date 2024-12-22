<?php

class Matches
{
    	public static function getOldMatchesList()
	{
	    
	    $db = Db::getConnection();
	    
	    $mathesList = array();
	
	    $result = $db->query('SELECT match_id, command_a, command_b, match_date, result_a, result_b FROM matches');
	                    
	            $i = 0;
	            
	            while($row = $result->fetch()) {
	                $mathesList[$i]['match_id'] = $row['match_id'];
	                $mathesList[$i]['command_a'] = $row['command_a'];
	                $mathesList[$i]['command_b'] = $row['command_b'];
	                $mathesList[$i]['match_date'] = $row['match_date'];
	                $mathesList[$i]['result_a'] = $row['result_a'];
	                $mathesList[$i]['result_b'] = $row['result_b'];
	                $i++;
	            }
	            return $mathesList;
	}
	public static function getMatchById($id)
    {
         $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM matches WHERE match_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
	 public static function createMatchByAdmin($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO matches '
                . '(command_a, command_b, result_a, result_b)'
                . 'VALUES '
                . '(:command_a, :command_b, :result_a, :result_b)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':command_a', $options['command_a'], PDO::PARAM_STR);
        $result->bindParam(':command_b', $options['command_b'], PDO::PARAM_STR);
        $result->bindParam(':result_a', $options['result_a'], PDO::PARAM_STR);
        $result->bindParam(':result_b', $options['result_b'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
     public static function deleteMatchByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM matches WHERE match_id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
public static function updateMatchByAdmin($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE matches SET  command_a = :command_a,  command_b = :command_b, result_a = :result_a, result_b = :result_b WHERE match_id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':command_a', $options['command_a'], PDO::PARAM_STR);
        $result->bindParam(':command_b', $options['command_b'], PDO::PARAM_STR);
        $result->bindParam(':result_a', $options['result_a'], PDO::PARAM_STR);
        $result->bindParam(':result_b', $options['result_b'], PDO::PARAM_STR);
         
        return $result->execute();
    }
    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    
}