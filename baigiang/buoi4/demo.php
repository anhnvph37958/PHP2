<?php 
class PhuongTienGiaoThong{
    // thuộc tính
    private $tenPt;
    public $loaiPt;
    // phương thức 

    public function hienThi(){
        echo "Hien thi PTGT: ";
        $this->chay();
    }

    public function __construct($tenPt,$loaiPt){
        $this->tenPt = $tenPt;
        $this->loaiPt = $loaiPt;
    }
    public function doXe(){
        echo "xe da bi đổ";
    }
}

class XeMay extends PhuongTienGiaoThong{
    public $doco;

    public function chay(){
        echo "day la xe may ";
    }

    public function __construct($tenPt, $loaiPt,$doco){
       parent::__construct($tenPt,$loaiPt);
       $this->doco = $doco;
    }
    public function doXe(){
        parent::doXe();
        echo "xe may bi do";
    }
}

$xemay = new XeMay("Xe máy","2 bánh","2 kỳ"); // cha có thể dùng dữ lieu có trong con khi khởi tạo từ thằng con
// $xemay ->chay();
// $xemay->hienThi();
// $phuongtien = new PhuongTienGiaoThong();
// $phuongtien->hienThi();
$xemay->doXe();
?>