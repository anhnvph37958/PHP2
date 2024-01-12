<?php
class Crussh{
    public $hoTen;
    public $NamSinh;
    public $diaChi;
    public $sdt;
    public function setHoTen($hoten){
        $this->hoTen=$hoten;
    }
    public function setNamSinh($namsinh){
        $this->hoTen=$namsinh;
    }
    public function setDiaChi($diachi){
        $this->hoTen=$diachi;
    }
    public function setSdt($sdt){
        $this->hoTen=$sdt;
    }

    public function getHoTen(){
        return $this->hoTen;
    }
    public function getNamSinh(){
        return $this->NamSinh;
    }
    public function getDiaChi(){
        return $this->diaChi;
    }
    public function getSdt(){
        return $this->sdt;
    }

    public function __construct($hoTen,$namSinh,$diaChi,$sdt){
        $this->hoTen = $hoTen;
        $this->NamSinh =$namSinh;
        $this->diaChi = $diaChi;
        $this->sdt = $sdt;
    }

    public function tinhTuoi(){
        $tuoi = date('Y')-$this->NamSinh;
        return $tuoi;
    }
    public function layChong(){
        $layChong = date('Y')-$this->NamSinh;
   
        if($layChong<18){
            echo "chua du tuoi lay chong";
        
        }else if($layChong>=18){
            echo "da co the lay chong";
        }

    }
    public function hienThi(){
        echo "ten: ".$this->hoTen."<br>";
        echo "năm sinh: ".$this->NamSinh."<br>";
        echo "địa chỉ: ".$this->diaChi."<br>";
        echo "số điện thoai: ".$this->sdt."<br>";
    }
}

?>