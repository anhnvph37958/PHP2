<?php
require_once 'baitap.php';
require_once 'giaovien.php';

$obj = new Giaovien('Hung',2000,'Ha noi','098765432',90,1000);
$obj->hienThi();
echo "<br>";
$obj->tinhTuoi();
echo "<br>";
$obj->tinhLuong();



?>