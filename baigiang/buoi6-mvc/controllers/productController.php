<?php 
require_once 'model/product.php';

function listProduct(){
    $product =  getAllProduct();
    require_once 'view/product/list.php';
}


?>