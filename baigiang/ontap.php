<?php
// kiểu dữ liệu 
$a = 1; // kiểu số nguyên
$b = 1.4; // kiểu số thực
$c = "php 2"; // kiểu chuỗi
$d = true; // kiểu boolean 
echo $a . "" . $c;

// mảng 
$mang = [1, 2, 3, 4, 7]; // sử dụng cho php phiên bản >1.0

$mang2 = array(1, 3, 7, 8);

for ($i = 0; $i < count($mang); $i++) {
    echo "<br>" . $mang[$i];
}
foreach ($mang as $key => $value) {
    echo $value;
}
// mảng liên hợp 
$manglh = ["a" => 1, "b" => 3, "c" => 6, "d" => 2];
echo "<br>" . $manglh["d"] . "<br>";
foreach ($manglh as $key => $value) {
    echo $value;

}


?>
<table border="1">
    <tr>
        <th>vi tri</th>
        <th>gia tri</th>
    </tr>
    <?php
    foreach ($manglh as $key => $value) {
        ?>
        <tr>
            <td>
                <?php echo $key ?>
            </td>
            <td>
                <?php echo $value ?>
            </td>
        </tr>

    <?php } ?>
</table>
<br>
<?php
// hàm : thực hiện chức năng nào đó trong chương trình 
// hàm giúp chương trình gắn gọn dễ hiểu

function kt_sochan($n)
{
    // $n là tham số truyền vào
// các tham số đc cách nhau bằng dấu phẩy
    if ($n % 2 == 0) {
        echo "Đây là số chẵn";
    } else {
        echo "Đây là số lẻ";
        echo "<br>";
    }

}

$a1 = 5;
$a2 = 10;
kt_sochan($a1);
//hàm số giá trị trả về nhận biết = return trong hàm ;
function tinhtong($a, $b)
{
    echo "tong la :" . ($a + $b);

}
function tinhtongtrave($a, $b)
{
   return ($a + $b);

}
tinhtong(3,5);
 echo "<br>".tinhtongtrave(3,5);
echo "<br>";
 // bài tập viết hàm thong tin có các tham số truyền vào là:
 // tên , năm sinh, địa chỉ, email
 // in ra tên, tuổi, địa chỉ, email

 function thongtin($ten,$ns,$dc,$email){
    echo "ho ten :".$ten."<br>";
    echo "tuoi :".(date('Y')-$ns)."<br>";
    echo "diachi :".$dc."<br>";
    echo "email :".$email."<br>";
 }
 
thongtin('tien',2004,'ha noi','anh@gmail.com');
?>