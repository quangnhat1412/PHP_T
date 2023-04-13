<?php
include_once 'function.php';
$MaCD = $_GET['MaCD'];
$Sach_CD = Get_ALL_Sach_CD ($MaCD);
while ($row_sach_cd = mysqli_fetch_assoc($Sach_CD)) {


?>
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-header bg-danger text-white"> <?php echo $row_sach_cd["TenSach"];?></div>
            <img src="images\<?php echo $row_sach_cd["AnhBia"];?>" alt="AnhBia" class="card-img-top">
            <div class="card-footer text-center">
                <div class="card-title">Đơn giá: <?php echo $row_sach_cd["Dongia"];?> VNĐ</div>
                <div class="btn btn-success m-auto">Xem chi tiết</div>
            </div>
        </div>
    </div>

<?php

}
?>

<!-- Ý tưởng : Sử dụng câu lệnh trong sql lấy ra dòng đầu tiền trong table chủ đề: 
        + khởi tạo giá trị MaCD = MaCD của dòng đầu tiên;
        + Nếu Isset MaCD tồn tại ...
-->