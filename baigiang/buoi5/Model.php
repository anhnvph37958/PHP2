<?php
abstract class Model{
    // thuoc tính 
    public $name;

    // phương thức 
    public function getData(){
        echo "Đây là phương thức getData";
    }
    // phương thức trừu tượng
    abstract public function add();
    abstract protected function delete();
    abstract public function update();
}


?>