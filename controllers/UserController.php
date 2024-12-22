<?php
	include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
    require_once ROOT. '/models/cart.php';
   
   
class UserController {
	public function actionRegister()
		{
		    $email = '';
		    $tel = '';
		    $password = '';
		    $name = '';
		    $result = false;
		    
		   if (isset($_POST['submit'])) {
            $name = $productId = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['name'])))));
            $email = $productId = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['email'])))));
            $password = $productId = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['password'])))));
            $tel = $productId = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['tel'])))));
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkTel($tel)) {
                $errors[] = 'Слишком короткий номер';
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            
            if ($errors == false) {
                $result = User::register($name, $email, $password, $tel);
            }

        }
			
			require_once ROOT. '/views/lasertaq/user/register.php';
			return true;
		}
		 
public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
           $email = $productId = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['email'])))));
            $password = $productId = trim((strip_tags(stripcslashes(htmlspecialchars($_POST['password'])))));
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /account"); 
            }

        }

        require_once(ROOT . '/views/lasertaq/user/login.php');

        return true;
    }

public function actionLogout()
{
    session_start();
    unset($_SESSION["user"]);
    unset($_SESSION["products"]);
    header("Location: /"); 
    
}

}

?>