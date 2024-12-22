<?php
return array(
   //запрос => контроллер/экешн
   //-----------------ПОЛЬЗОВАТЕЛЬ-----------------
   //Блог
   'blog' => 'articles/index',
   'article/([0-9]+)' => 'articles/view/$1',
   'faq' => 'articles/useful',
   //Блог
   'promo' => 'site/promo',
   'contacts' => 'site/contacts',
   //Прайс
   'price/cybertag' => 'products/cybertag',
   'price/lasertag' => 'products/lasertag',
   'price/pskov' => 'products/pskov',
   'price/warstation' => 'products/warstation',
   //Поиск
    'search' => 'site/search',
   //Отзывы
    'feedback' => 'feedback/index',
    'feedback/create' => 'feedback/create',
   //Товар
 'products/([0-9]+)' => 'products/view/$1',
 //Категории
 'catalog' => 'catalog/index',
 'category/([0-9]+)' => 'catalog/category/$1',
 //Фотогалерея
 'gallery' => 'gallery/gallery',
 'album/([0-9]+)' => 'gallery/Album/$1',
 'video' => 'gallery/video',
 //Матчи
 'matches' => 'matches/matches',
 //ЛК пользователя
 'user/register' => 'user/register',
 'user/login' => 'user/login',
 'user/logout' => 'user/logout',
 'account/edit' => 'account/edit',
 'account' => 'account/index',
 //Корзина
 'cart/add/([0-9]+)' => 'cart/add/$1',
 'cart/del/([0-9]+)' => 'cart/del/$1',
 'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
 'cart/checkout/([0-9]+)' => 'cart/checkout/$1',
 'cart' => 'cart/index',
 //-----------------АДМИНИСТРАТОР-----------------
 ///Загрузка матчей
    'admin/match/create' => 'adminMatches/create',
    'admin/match/edit/([0-9]+)' => 'adminMatches/edit/$1',
    'admin/match/delete/([0-9]+)' => 'adminMatches/delete/$1',
    //Управление товарами
    'admin/package/create' => 'adminProduct/create',
    'admin/package/edit/([0-9]+)' => 'adminProduct/edit/$1',
    'admin/package/delete/([0-9]+)' => 'adminProduct/delete/$1',
     
    //Управление блогом
    'admin/article/create' => 'adminArticle/create',
    'admin/article/edit/([0-9]+)' => 'adminArticle/edit/$1',
    'admin/article/delete/([0-9]+)' => 'adminArticle/delete/$1',
    
    //CRM
    'admin/crm/delete/([0-9]+)' => 'adminCrm/delete/$1',
    'admin/crm/([0-9]+)' => 'adminCrm/crm/$1',
     
     
    //Управление заказами
    'admin/order/create' => 'adminOrder/create',
    'admin/order/processing/([0-9]+)' => 'adminOrder/processing/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/user/([0-9])' => 'adminOrder/userData/$1',
     //Управление букингом
    'admin/date/create' => 'adminBooking/create',
    'admin/date/delete/([0-9]+)' => 'adminBooking/delete/$1',
 
     
//Администрация
 'admin' => 'admin/index',
   //Главные страница
   'warstation' => 'site/warstation',    	  
   'lasertag' => 'site/lasertag',
   'pskov' => 'site/pskov',
   '' => 'site/index',
    

 );
 
 