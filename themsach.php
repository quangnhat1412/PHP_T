<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm sách</title>
			<!-- Khai báo CSS -->
		<link rel="stylesheet" href="MyScript/bootstrap.min.css">
		<link rel="stylesheet" href="MyScript/mystyle.css">

</head>
<body>
	<div class="container my-4">
	<div class="row justify-content-center">
		<div class="col-sm-8" >
			<div class="card">
				<div class="card-header bg-success text-white font-weight-bold">THÊM SÁCH MỚI</div>
				<form id="main-form" action="xulythemsach.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Tên sách</label>
						<input class="form-control" type="text" id="txttensach" name="txttensach" value="">
					</div>
					<div class="form-group">
						<label for="">Đơn giá</label>
						<input class="form-control" type="text" id="txtdongia" name="txtdongia" value="" >
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Chủ đề</label>
						<select class="form-control custom-select" name="cbochude">
							<option value="">---Chọn chủ đề ----</option>
							<?php 
								$cd= Get_ALL_CD();
								while($row_cd = mysqli_fetch_assoc($cd)){
							?>
							<option value="<?php echo $row_cd["MaCD"];?>"><?php echo $row_cd["Tenchude"];?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Nhà xuất bản</label>
						<select class="form-control custom-select" name="cbonhaxb">
							<option value="">---Chọn nhà xuất bản ----</option>
							<?php 
								$nxb= Get_ALL_NBX();
								while($row_nxb = mysqli_fetch_assoc($nxb)){			
							?>
							<option value="<?php echo $row_nxb["MaNXB"]?>"><?php echo $row_nxb["TenNXB"]?></option>
							<?php
								}
							?>
						</select>
					</div> 
					<div class="form-group">
							<label for="">Ảnh bìa sách</label>
							<input type="file" class="form-control-file" id="file_anh_bia" name="file_anh_bia">
					</div>					
					<div class="form-group text-center">
						<input type="submit" class="btn btn-success" id="btnsubmit" name="btnsubmit" value="Thực hiện">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
		<!-- Khai báo và sử dụng Script -->
		<script src="MyScript/jquery-3.6.0.min.js"></script>
		<script src="MyScript/popper.min.js"></script>
		<script src="MyScript/bootstrap.min.js"></script>

</body>
</html>

