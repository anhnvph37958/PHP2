<?php 
class Sum {
public $a = 4;
public $b = 6;

function tinhtong($a,$b){
    return ($a+$b);
}
}
// 
$obj = new Sum();
echo $obj->a;
echo '<br>';
echo $obj ->tinhtong($obj->a,$obj->b);

?>



























