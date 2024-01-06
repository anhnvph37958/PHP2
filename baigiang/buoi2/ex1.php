<?php
// xây dựng class TinhToan gồm thuộc tính numberA, numberB
// các phương thức tính tổng hiệu tích thương
// 
class TinhToan
{
    public $numberA = 5;
    public $numberB = 9;
    // hằng số
    const MSG_CONTENT = "PHP2";
    // phuonqg thức
    function tinhTong($a, $b)
    {
        return $a + $b;
    }
    function tinhHieu($a, $b)
    {
        return $a - $b;
    }
    function tinhThuong($a, $b)
    {
        if ($b != 0) {
            return $a / $b;
        } else {
            echo "sai";
        }
    }
    function tinhTich($a, $b)
    {
        return $a * $b;
    }
    function setNumberA($value)
    {
        $this->numberA = $value;
    }
    function getNumberA()
    {
        return $this->numberA;
    }

    // hàm khởi tạo
    function __construct($a, $b)
    {
        $this->numberA = $a;
        $this->numberB = $b;
    }
    function inThongTin(){

    }
}
// khởi tạo đối tượng 
// $obj = new TinhToan();
// $obj1 = new TinhToan(3,6);

// lấy giá trị thuộc tính
echo $obj1->numberA;
// echo $obj->numberB;

// // gán giá trị mới cho a
// //  $obj ->numberA = 10;
// $obj->setNumberA(10);
// echo '<br>';
// echo $obj->getNumberA();
// echo '<br>';
// echo $obj->tinhTong($obj->numberA, $obj->numberB);
// class SinhVien thuộc tính : hoten, tuoi, diachi, email
// các phương thức get, set tương ứng, hàm in thông tin
// hmaf khởi tạo có tham số truyền vào
//
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

    }
}


$obj2 = new SinhVien("thang",23,"Phu Tho");










?>