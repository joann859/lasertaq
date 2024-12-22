<?php
include_once ROOT. '/models/products.php';
    require_once ROOT. '/models/user.php';
    require_once ROOT. '/models/cart.php';
    require_once ROOT. '/models/booking.php';
   
class CartController {
    
    public function actionAdd($id)
    {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }else{
             header("Location: /user/login");
        }
        Cart::addProducts($id);
        
        $referrer = $_SERVER['HTTP_REFERER'];
        
        header("Location: $referrer");
    }
     
   public function actionCheckout($order_number){
            if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }else{
             header("Location: /user/login");
        }
        $order_number = trim((strip_tags(stripcslashes(htmlspecialchars($order_number)))));
        $orderByNumber = array();
        $orderByNumber = Cart::getOrderByNumber($order_number);
        if(isset($_POST['submit'])){
              $options['date'] = $_POST['date'];
              $options['cat'] = $_POST['cat'];
               $options['order_number'] = $_POST['order_number'];
                   Cart::Checkout($options);
                  Book::Booking($options);
                  Book::AdminAlert();
                  
                  header("Location: /cart"); 
                    
         }
         require_once ROOT. '/views/lasertaq/user/checkout.php';
         
         return true;
    }
     
public function actionIndex()
    {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }else{
             header("Location: /user/login");
        }
        $productsInCart = false;
        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $products = $productsInCart ;
           
        }
        $ordersInCart = false;
        $ordersInCart = Cart::getOrders();
        if ($ordersInCart) {
            // Получаем полную информацию о товарах для списка
            $orders = $ordersInCart ;
           
        }
        if(isset($_POST['submit'])){
              $options['date'] = $_POST['date'];
              $options['cat'] = $_POST['cat'];
               $options['order_number'] = $_POST['order_number'];
                   Cart::Checkout($options);
                  Book::Booking($options);
                  Book::AdminAlert();
                  
                  header("Location: /cart"); 
                    
         }
        
          require_once ROOT. '/views/lasertaq/user/cart.php';
        return true;
    }
public function actionDel($id)
    {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
        }else{
             header("Location: /user/login");
        }
        $id = trim((strip_tags(stripcslashes(htmlspecialchars($id)))));
        Cart::delProducts($id);
        
        header("Location: /cart");
    }
}
 