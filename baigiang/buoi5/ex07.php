<?php 
require_once 'admin/info.php';
require_once 'user/infoUser.php';

use User\Info;
$obj = new Info('Lam',19,9999999);
$obj->hienThi();
?>