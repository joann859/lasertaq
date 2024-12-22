<?php

class User
{
    //РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ
       public static function register($name, $email, $password, $tel) {
        
        $db = Db::getConnection();
        $sql = 'INSERT INTO user (name, email, password, tel) '
                . 'VALUES (:name, :email, :password, :tel)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':tel', $tel, PDO::PARAM_STR);
        
        
        return $result->execute();
        
    }
       public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['user_id'];
        }

        return false;
    }
   
   //АУТЕНТИФИКАЦИЯ ПОЛЬЗОВАТЕЛЯ
   //Запоминаем данные
    public static function auth($userId)
    {
        
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }
public static function isGuest()
    {   
        
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    public static function edit($id, $email, $password)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE user 
            SET email = :email, password = :password 
            WHERE user_id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':email', $email, PDO::PARAM_STR);    
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        return $result->execute();
    }

     /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    //Проверяем длину телефона
     public static function checkTel($tel) {
        if (strlen($tel) >= 11) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет email
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    public static function checkEmailExists($email) {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }
        
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE user_id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }
    public static function Speed($options){
       // в переменную $badIP мы можем со временем вписать IP-адреса некоторых спамеров (например тех, которые заполнят Вашу форму вручную)
// IP будет указано в log файле. IP-адреса указываем в кавычках, через запятую, пример: ['185.189.114.123', '185.212.171.99',]
$badIP    = []; 
$to       = "cybertag53@yandex.ru";
$from     = "АДРЕНАЛИН";
$spam     = $_POST["surname"]; // принимаем данные из скрытого спам-поля
$ipAddr   = $_SERVER['REMOTE_ADDR']; // определяем IP-адрес пользователя
$today    = date('d-m-Y_H-i');
$name     = strip_tags(trim($options["name"])); // обрабатываем input "name"
$tel      = strip_tags(trim($options["tel"])); // обрабатываем input "tel"
$question    = strip_tags(trim($options["message"])); // обрабатываем input "message"
$subject  = "!!! Новая заявка !!!";
$message  = "Вопрос с формы \"Задать вопрос с сайта\"<hr>"."\n";
$message .= "<b>Имя:</b><br>{$name}<hr>"."\n"."<b>Телефон:</b><br>{$tel}<hr>"."\n"."<b>E-mail:</b><br>{$question}<hr>"."\n";
$subject  = "=?utf-8?B?".base64_encode($subject)."?=";
$headers  = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";

if(!in_array($ipAddr, $badIP) && empty($spam)) { // если не заполнено скрытое поле и если IP-адрес не находится в нашем чёрном списке

    $logText = strip_tags($message); // обрезаем лишние теги для log файла 

    // если в поле с именем нет ни одной цифры и ни одной латинской буквы
    // а также если в поле с комментариями нет ни одного соответствия адресам сайтов
    // можем добавить любые другие сочетания букв, по аналогии, через пайп, например (\.ua) и прочее
    if(!preg_match("/[a-z0-9]/i", $name) && !preg_match("/(www)|(http)|(@)|(\.ru)|(\.com)/i", $question)) {

        // записываем логи в файл (если файла нет, то он будет создан автоматически)
        file_put_contents("mail.log", "\n{$today}\n{$logText}\n", FILE_APPEND); chmod("mail.log", 0600);

        // если всё ок - отправляем письмо администратору сайта
        if(mail($to, $subject, $message, $headers)) {
            $subj  = "Ваш вопрос получен такой-то компанией"; // формируем письмо-отбойник клиенту, что его заявка принята
            $subj  = "=?utf-8?B?".base64_encode($subj)."?=";
            $mess  = "{$name}, Ваш вопрос принят в работу в такой-то компании.\n<br>С Вами свяжутся в ближайшее время по телефону {$tel}.\n\n<br><br>С уважением,\n<br>такая-то компания\n<br>+7 (000) 000-00-00\n0<br>https://адрес_вашего_сайта";
            mail($subj, $mess, $headers);
        }

    }
    else { // если в поле с именем были латинские буквы, либо были указаны признаки сайтов - записываем логи
        file_put_contents("spam.log", "\n{$today}\nIP:{$ipAddr}\n{$logText}\n", FILE_APPEND); chmod("spam.log", 0600);
        echo "Вы некорректно заполнили форму связи. Пожалуйста, свяжитесь с нами по e-mail или телефону.<br>";
        $message .= "<br><b>Это письмо попало в спам</b>"; mail("электронная_почта_администратора_сайта", $subject, $message, $headers);
    }
}
else { // если роботом было заполнено скрытое поле или если IP-адрес в чёрном списке
    exit(); // сразу выходим
} 

}

}
        ?>