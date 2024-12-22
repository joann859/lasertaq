<?php
require_once ROOT. '/models/user.php';



abstract class AdminBase {
    
    
    public static function checkAdmin(){
        
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        if($user['access'] == 'admin') {
            return true;
    }
       die('Access denied');
    }
}