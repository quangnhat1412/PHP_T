<div class="row justify-content-center">
    <!-- Cột bên trái => Liệt kê các chủ đề -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-header text-center">CHỦ ĐỀ</div>
            <ul class="list-group list-group-flush">
                <!-- Đầu vòng lặp -->
                <?php
                $cd = Get_ALL_CD();
                while ($row_cd = mysqli_fetch_assoc($cd)) {
                    $sach_cd_s = Get_ALL_Sach_CD($row_cd["MaCD"]);
                    if (mysqli_num_rows($sach_cd_s) > 0) {

                ?>
                        <li class="list-group-item text-success">
                            <div class="chude" MaCD="<?php echo $row_cd["MaCD"] ?>"><?php echo $row_cd["Tenchude"] ?></div>
                        </li>
                <?php
                    }
                }
                ?>
                <!-- Cuối vòng lặp -->
            </ul>
        </div>
    </div>
    <!-- Cột bên phải => Liệt kê sách theo chủ đề -->
    <div class="col-md-9">
        <div id="ketqua" class="row">

        </div>
    </div>
</div>