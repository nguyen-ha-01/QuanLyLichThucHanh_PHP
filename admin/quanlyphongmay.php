<section>
	<div class="table-responsive-xxl">
		<form action="" method="post">
			<caption>Nhập thông tin để thực hiện chức năng</caption>
			<table class="table table-striped">
				<tr>
					<td>Mã phòng máy:</td>
					<td><input type="text" name="MaPhongMay" id=""></td>
					<td>Toà nhà:</td>
					<td>
						<select name="ToaNha" id="toanha">
							<option value="A1">A1</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tên phòng máy:</td>
					<td><input type="text" name="TenPhongMay" id=""></td>
					<td>Tình trạng máy chiếu:</td>
					<td>
						<input type="radio" name="TinhTrangMayChieu" id="TinhTrangMayChieu1"><label for="TinhTrangMayChieu1" value="1">Tốt</label>
						<input type="radio" name="TinhTrangMayChieu" id="TinhTrangMayChieu2"><label for="TinhTrangMayChieu2" value="0">Hỏng</label>
					</td>
				</tr>
				<tr>
					<td>Số máy tính</td>
					<td><input type="number" name="SoMayTinh" id=""></td>
					<td>Tình trạng phòng máy:</td>
					<td>
						<input type="radio" name="TinhTrang" id="TinhTrang1"><label for="TinhTrang1" value="1">Sử dụng được</label>
						<input type="radio" name="TinhTrang" id="TinhTrang2"><label for="TinhTrang2" value="0">Đang bảo trì</label>
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center">
						<input type="button" value="Thêm" class="btn btn-outline-primary btn-rounded" data-bs-ripple-color="dark">
						<input type="button" value="Sửa" class="btn btn-outline-info">
						<input type="button" value="Xoá" class="btn btn-outline-danger">
						<input type="reset" value="Huỷ bỏ" class="btn btn-outline-secondary">
					</td>
				</tr>
			</table>
		</form>
		<hr>
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
		<div>
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
						</tr>
					<?php
					}
					?>
					<?php
					mysqli_close($conn);
					?>
				</tbody>
			</table>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</section>