<?php
$chucnang = 1;
if (isset($_GET['chucnang'])) {
	$chucnang = $_GET['chucnang'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Giao diện mẫu</title>

	<!-- Khai báo CSS -->
	<link rel="stylesheet" href="MyScript/bootstrap.min.css">
	<link rel="stylesheet" href="MyScript/mystyle.css">
</head>

<body>
	<div class="container">
		<?php
		include_once 'function.php';
		// Phần menu 
		include_once 'menu.php';
		// Phần Nội dung xem sách 
		if ($chucnang == 1) {
			include_once("xemsach.php");
		} else {
			include_once("themsach.php");
		}
		// Phần footer
		include_once 'footer.php';
		
		// Lấy 1 dòng đầu tiên trong table chủ đề để gán cho trang mặc định
		$one_cd = Get_1row_CD();
		$row = mysqli_fetch_assoc($one_cd);
		$MaCD = $row["MaCD"];
		if (isset($_GET['MaCD'])) {
			$MaCD = $_GET['MaCD'];
		}
		?>
	</div>

	<!-- Khai báo và sử dụng Script -->
	<script src="MyScript/jquery-3.6.0.min.js"></script>
	<script src="MyScript/popper.min.js"></script>
	<script src="MyScript/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			function XemSach(macd) {
				var url = "xulyxemsach.php?MaCD=" + macd;
				$.get(url, function(data) {
					$('#ketqua').html(data);
				});
			}

			$('.chude').click(function() {
				var macd = $(this).attr('MaCD');
				XemSach(macd);
			});

			XemSach('<?php echo $MaCD; ?>');
		});
	</script>
</body>

</html>