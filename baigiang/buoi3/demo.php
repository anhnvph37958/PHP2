<?php
class SinhVien{
    public $hoTen;
    public $tuoi;
    public $diaChi;
    public $email;

    function setHoTen($value){
        $this->hoTen=$value;
    }
    function setTuoi($value){
        $this->tuoi=$value;
    }
    function setDiaChi($value){
        $this->diaChi=$value;
    }
    function setEmail($value){
        $this->email=$value;
    }

    function getHoTen(){
        return $this->hoTen;
    }
    function getTuoi(){
        return $this->tuoi;
    }
    function getDiaChi(){
        return $this->diaChi;
    }
    function getEmail(){
        return $this->email;
    }

    function __construct($hoTen,$tuoi,$diaChi,$email){
        $this->hoTen=$hoTen;
        $this->tuoi=$tuoi;
        $this->diaChi=$diaChi;
        $this->email=$email;
    }
    function inThongTin(){
            echo 'ten sinh vien :'.$this->hoTen.'<br>';
            echo 'tuoi sinh vien :'.$this->tuoi.'<br>';
            echo 'dia chi sinh vien: '.$this->diaChi.'<br>';
            echo 'email sinh vien: '.$this->email.'<br>';
    }

    private function getThongTin(){
        echo $this->getHoTen().'-'.$this->getTuoi();
    }
 public function xuatThongTin(){
    return $this->getThongTin();
 }   
}

?>