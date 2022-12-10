<?php

$conn = mysqli_connect('localhost', 'root', '12345678', 'thuchanhhaui');
$qr = "SELECT * FROM lichthuchanh ";
$result = mysqli_query($conn, $qr);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$maphongmay = test_input($_POST["maPhongMay"]);
	$malophocphan = test_input($_POST['maLopHocPhan']);
	$ngaythuchanh = test_input($_POST['ngayThucHanh']);
	if (!empty($maphongmay) && !empty($malophocphan) && !empty($ngaythuchanh)) {
		$del =  "DELETE FROM lichthuchanh WHERE maPhongMay = '$maphongmay' and maLopHocPhan = '$malophocphan' and ngayThucHanh = '$ngaythuchanh'";
		mysqli_query($conn, $del);
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="container">
	<div>
		<table class="table table-striped table-bordered table-hover border-dark">
			<thead>
				<tr>
					<th>ma phong may</th>
					<th>ma lop hoc phan</th>
					<th>ngay thuc hanh</th>
					<th>buoi thuc hanh </th>
					<th>thoi diem dang ky </th>
				</tr>
			</thead>

			<?php
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr> <td>" . $row["maPhongMay"] . " </td> <td>" . $row["maLopHocPhan"] . " </td>" . "<td>" . $row["ngayThucHanh"] . " </td>" . "<td>" . $row["buoiThucHanh"] . " </td>" . "<td>" . $row["thoiDiemDangKy"] . "</td></tr>";
				}
			} else {
				echo "<tr><td colspan=" . "2" . ">" . "<h3> table is empty </h3>" . "</td></tr>";
			}
			mysqli_close($conn);
			?>
		</table>
	</div>
	<div>
		<table>
			<tr>
				<td colspan="2">
					<h2> Xoa </h2>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<tr>
				<td>Ma phong may</td>
				<td><input type="text" name="maPhongMay"></td>
			</tr>
			<tr>
				<td>Ma lop hoc phan</td>
				<td><input type="text" name="maLopHocPhan"></td>
			</tr>
			<tr>
				<td>Ngay thuc hanh</td>
				<td><input type="text" name="ngayThucHanh"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</div>
</div>