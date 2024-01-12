<?php
require_once 'admin/taiKhoan.php';
require_once 'user/taiKhoan.php';

// khai báo cách 1: $objAdmin = new adminTaiKhoan\taiKhoan();
// cách 2;
// use adminTaiKhoan\taiKhoan;
// $objAdmin = new taiKhoan();

// cách 3:
use adminTaiKhoan\taiKhoan as taiKhoanAdmin;
$obj = new taiKhoanAdmin();
?>