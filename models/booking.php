<?php

class Book
{

    /**
     * Добавление товара в корзину (сессию)
     * @param int $id
     */
        public static function Booking($options)
    {
        
        // Соединение с БД
        $db = Db::getConnection();
          
        // Текст запроса к БД
        $sql = "UPDATE booking SET status = 2 WHERE qwerty = :date AND cat = :cat";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':date',  $options['date'], PDO::PARAM_INT);
         $result->bindParam(':cat',  $options['cat'], PDO::PARAM_STR);
        return $result->execute();
     
    }
    public static function AdminAlert(){
        $recepient = "cybertag53@yandex.ru";
        $sitename = "Платформа Адреналин";

        $pagetitle = "новая заявка \"$sitename\" !";
        $message = "Зайдите пожалуйста в панель администратора https://lasertaq.ru/admin\n";
        mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
    }

     public static function getBookingList($order_number)
    {

        $db = Db::getConnection();

        $bookingList = array();
   
        $result = $db->query("SELECT * FROM booking INNER JOIN cart ON booking.cat = cart.cat WHERE booking.status = 1 AND cart.order_number = '$order_number'");

        $i = 0;
        while ($row = $result->fetch()) {
            $bookingList[$i]['booking_id'] = $row['booking_id'];
            $bookingList[$i]['qwerty'] = $row['qwerty'];
                $bookingList[$i]['status'] = $row['status'];
            $i++;
        }

        return $bookingList;
    }
     
 public static function getBookingListByAdmin()
    {

        $db = Db::getConnection();

        $bookingList = array();

        $result = $db->query('SELECT booking_id, qwerty, status FROM booking ');

        $i = 0;
        while ($row = $result->fetch()) {
            $bookingList[$i]['booking_id'] = $row['booking_id'];
            $bookingList[$i]['qwerty'] = $row['qwerty'];
                $bookingList[$i]['status'] = $row['status'];
            $i++;
        }

        return $bookingList;
    }
 public static function createDateByAdmin($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        $status = 1;
        // Текст запроса к БД
        $sql = 'INSERT INTO booking '
                . '(qwerty, status, cat)'
                . 'VALUES '
                . '(:date, :status, :cat)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':date', $options['date'], PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        $result->bindParam(':cat', $options['cat'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
     public static function deleteDateByAdmin($id){
       
               $db = Db::getConnection();

        
        $sql = 'DELETE FROM booking WHERE booking_id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
}