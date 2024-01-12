<?php
require_once 'baitap.php';

class Giaovien extends ConNguoi{
    public $soGioGiang;
    public $luongCb;
    
    public function tinhLuong(){
        $luong = ($this->soGioGiang)*($this->luongCb);
        echo 'luong'.$luong;
    }
    public function hienThi(){
        parent::hienThi();
        echo 'so gio dạy:'.$this->soGioGiang.'<br>';
        echo 'luong co ban: '.$this->luongCb.'<br>';
     
    }

    public function __construct($hoTen, $namSinh, $diaChi, $sdt,$soGioGiang,$luongCb){
        parent::__construct($hoTen,$namSinh,$diaChi,$sdt);
        $this->soGioGiang=$soGioGiang;
        $this->luongCb=$luongCb;
    }
}
?>