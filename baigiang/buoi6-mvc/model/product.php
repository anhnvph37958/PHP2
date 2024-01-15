<?php 
require_once 'db.php';
function getAllProduct(){
    // hmaf lay du lieu
$sql = "select * from product";
return getData($sql);

}


?>