<?php
class ConNguoi{
    public $hoTen;
    public $namSinh;
    public $diaChi;
    public $sdt;

    public function getHoTen(){
        return $this->hoTen;
    }
    public function getNamSinh(){
        return $this->namSinh;
    }
    public function getDiaChi(){
        return $this->diaChi;
    }
    public function getSdt(){
        return $this->sdt;
    }

    public function setHoTen($hoTen){
        $this->hoTen=$hoTen;
    }
    public function setNamSinh($namSinh){
        $this->namSinh=$namSinh;
    }
    public function setDiaChi($diaChi){
        $this->diaChi=$diaChi;
    }
    public function setSdt($sdt){
        $this->sdt=$sdt;
    }
    public function hienThi(){
        echo "ho ten: ".$this->hoTen.'<br>';
        echo "nam sinh: ".$this->namSinh.'<br>';
        echo "dia chi: ".$this->diaChi.'<br>';
        echo "sdt: ".$this->sdt.'<br>';
        
    }
    public function tinhTuoi(){
        $tuoi = date('Y')-$this->namSinh;
        echo 'tuoi :'. $tuoi;
    }

    public function __construct($hoTen,$namSinh,$diaChi,$sdt){
        $this->hoTen=$hoTen;
        $this->namSinh=$namSinh;
        $this->diaChi=$diaChi;
        $this->sdt=$sdt;
    }
}



?>