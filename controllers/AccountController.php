<?php 
	include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
    require_once ROOT. '/models/cart.php';
 class AccountController
 {
     
       public function actionIndex(){
           
           $userId = User::checkLogged();
           
           $user = User::getUserById($userId);
           
           require_once(ROOT. '/views/lasertaq/user/index.php');
           return true;
       }
       
public function actionEdit()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        
        $email = $user['email'];
        $password = $user['password'];
                
        $result = false;     

        if (isset($_POST['submit'])) {
            $email = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['email'])))));
            $password = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['password'])))));
            
            $errors = false;
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if ($errors == false) {
                $result = User::edit($userId, $email, $password);
            }

        }

        require_once(ROOT . '/views/lasertaq/user/edit.php');

        return true;
    }
 
 }
  ?>
 