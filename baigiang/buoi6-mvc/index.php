<?php 
require_once 'controllers/productController.php';
// điều hướng các phương thức từ controller
$url = isset($_GET['url'])==true ?$_GET['url']:"/";
switch ($url) {
    case '/':
        listProduct();
      
        # code...
        break;
    
    default:
        # code...
        break;
}

?>