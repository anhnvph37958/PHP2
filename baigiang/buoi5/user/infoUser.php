<?php 
namespace User;

class Info{
    public $name;
    public $tuoi;
    public $sdt;

    function __construct($name,$tuoi,$sdt){
        $this->name=$name;
        $this->tuoi=$tuoi;
        $this->sdt=$sdt;
    }
    public function hienThi(){
        echo 'ten: '.$this->name.'<br>';
        echo 'tuoi: '.$this->tuoi.'<br>';
        echo 'ten '.$this->sdt.'<br>';
    }
}


?>