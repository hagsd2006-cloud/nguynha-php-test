<?php
// Câu 1: In ra các số chẵn từ 1 đến 10
echo "<b>Câu 1: Các số chẵn từ 1 đến 10 là:</b><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>";

// Câu 2: Kiểm tra một số nguyên có phải là số nguyên tố hay không
echo "<b>Câu 2: Kiểm tra số nguyên tố:</b><br>";
$n = 29;
$laSoNguyenTo = true;

if ($n < 2) {
    $laSoNguyenTo = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $laSoNguyenTo = false;
            break;
        }
    }
}

if ($laSoNguyenTo) {
    echo "Số $n là số nguyên tố.<br><br>";
} else {
    echo "Số $n không phải là số nguyên tố.<br><br>";
}

// Câu 3: Hàm in hình chữ nhật dấu sao (*) với chiều rộng và chiều cao cho trước
echo "<b>Câu 3: In hình chữ nhật 5x3 dấu sao:</b><br>";
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Gọi hàm với chiều rộng 5, chiều cao 3
inHinhChuNhat(5, 3);
?>