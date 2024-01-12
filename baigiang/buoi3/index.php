<?php
require_once 'baitap1.php';
$obj = new Crussh("nguyen thi T",2004,"Phu Tho","098766999");

echo $obj->tinhTuoi();
echo "<br>";
echo $obj->layChong();
echo "<br>";
echo $obj->hienThi();
?>