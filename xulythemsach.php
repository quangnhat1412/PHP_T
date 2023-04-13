<?php

use function PHPSTORM_META\sql_injection_subst;

    include_once 'function.php';
    $txttensach = $_POST['txttensach'];
    $txtdongia = $_POST['txtdongia'];
    $cbochude = $_POST['cbochude'];
    $cbonhaxb = $_POST['cbonhaxb'];
    $file_anh_bia = $_FILES['file_anh_bia'];
    $anhbia = $file_anh_bia['name'];
    move_uploaded_file($file_anh_bia['tmp_name'],"images/" . $anhbia);

    // Tạo Truy Vấn tại đây luôn 
    $conn = Connect();
    $sql = "INSERT INTO sach(TenSach, MaCD, MaNXB, Dongia, AnhBia)
            VALUES('$txttensach', $cbochude, $cbonhaxb, $txtdongia, '$anhbia')";
    
    // Quay về index.php nếu thêm thành công
    if(mysqli_query($conn, $sql)){
        header('location:index.php');
    }else{
        echo 'Thêm dữ liệu thất bại';
    }

    DisConnect($conn);
?>