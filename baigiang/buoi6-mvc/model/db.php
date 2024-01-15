<?php 
require_once 'env.php';
// hamf ket noi
function getConnect(){
    $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.";charset=".DBCHARTSET,DBUSER,DBPASS);
    return $conn;
}
// ham lay du lieu 
// neu getAll = true  => tra ve list danh sach 
// ney getAll = false => thuc hien cac chuc nang them, sua, xoa
function getData($query,$getAll = true){
    $connect = getConnect();
    $stmt = $connect->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}

?>