<div class="container mt-3">
	<div class="btn-group" style="float: right;">
		<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			Lọc
		</button>
		<ul class="dropdown-menu dropdown-menu-end">
			<li><button class="dropdown-item" type="button">Mã phòng máy (Tăng dần)</button></li>
			<li><button class="dropdown-item" type="button">Mã phòng máy (Giảm dần)</button></li>
			<li><button class="dropdown-item" type="button">Tên phòng máy (Tăng dần)</button></li>
			<li><button class="dropdown-item" type="button">Tên phòng máy (Giảm dần)</button></li>
			<li><button class="dropdown-item" type="button">Toà nhà (Tăng dần)</button></li>
			<li><button class="dropdown-item" type="button">Toà nhà (Tăng dần)</button></li>
			<li><button class="dropdown-item" type="button">Số máy tính (Tăng dần)</button></li>
			<li><button class="dropdown-item" type="button">Số máy tính (Giảm dần)</button></li>
			<li><button class="dropdown-item" type="button">Tình trạng máy chiếu (Tốt)</button></li>
			<li><button class="dropdown-item" type="button">Tình trạng máy chiếu (Hỏng)</button></li>
			<li><button class="dropdown-item" type="button">Tình trạng phòng máy (Sử dụng được)</button></li>
			<li><button class="dropdown-item" type="button">Tình trạng phòng máy (Đang bảo trì)</button></li>
		</ul>
	</div>
	<caption>Thông tin danh sách các phòng máy</caption>
	<table class="table table-striped table-bordered table-hover border-dark">
		<thead class="table-dark">
			<tr>
				<th>Mã phòng máy</th>
				<th>Tên phòng máy</th>
				<th>Toà nhà</th>
				<th>Số máy tính</th>
				<th>Tình trạng máy chiếu</th>
				<th>Tình trạng phòng máy</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			include '../connect.php';
			$sql = "SELECT * FROM `phongmay`";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
				$maPhong = $row['maPhongMay'];
				$tenPhong = $row['tenPhongMay'];
				$toa = $row['toaNha'];
				$soMay = $row['soMayTinh'];
				$mayChieu = $row['tinhTrangMayChieu'];
				$tinhTrang = $row['tinhTrang'];
			?>
				<tr>
					<td><?php echo $maPhong; ?></td>
					<td><?php echo $tenPhong; ?></td>
					<td><?php echo $toa; ?></td>
					<td><?php echo $soMay; ?></td>
					<td><?php echo $mayChieu; ?></td>
					<td><?php echo $tinhTrang; ?></td>
					<td><a href="teacher-index.php?act=dangkylich" style="text-decoration: none;">Đăng ký</a></td>
				</tr>
			<?php
			}
			?>
			<?php
			mysqli_close($conn);
			?>
		</tbody>
	</table>
</div>