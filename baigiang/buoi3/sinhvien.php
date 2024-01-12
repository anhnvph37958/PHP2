<?php 
require_once 'demo.php';

$obj2 = new SinhVien("thang",23,"Phu Tho","anh@gmail.com");
echo $obj2->inThongTin();
echo "<br>";
echo $obj2->xuatThongTin();


// namespace dùng để định danh cho class
// giiar quyết các trường hợp class bị trùng nhau 
?>