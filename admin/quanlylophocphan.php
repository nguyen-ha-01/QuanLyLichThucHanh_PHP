<?php

$user = $_POST['user'];
 $pass = $_POST['pass'];
$conn = mysqli_connect('localhost',$user,$pass,'dangkylichthuchanh');
$qr = "SELECT * FROM lophocphan ";
$result = mysqli_query($conn,$qr); 

//del lop hoc phan  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$malophocphan = test_input($_POST['malophocphan']);
if(!empty($malophocphan)){
$del          = "DELETE FROM lophocphan WHERE maLopHocPhan = '$malophocphan'";
$delete       =  mysqli_query($conn,$del); 		
$malophocphan = "";	
$result = mysqli_query($conn,$qr);}
	$malophocphan_update = test_input($_POST['malophocphan_update']);
	$tenhocphan_update = test_input($_POST['tenhocphan_update']);
	$soluongsinhvien_update = test_input($_POST['soluongsinhvien_update']);
	$buoihoclythuyet_update = test_input($_POST['buoihoclythuyet_update']);
	$phonghoclythuyet_update = test_input($_POST['phonghoclythuyet_update']);
	$tiethoclythuyet_update = test_input($_POST['tiethoclythuyet_update']);
	$magiangvien_update = test_input($_POST['magiangvien_update']);
	
 if ( !empty($malophocphan_update) && !empty($tenhocphan_update) && !empty($soluongsinhvien_update) && !empty($buoihoclythuyet_update)&& !empty($phonghoclythuyet_update) && !empty($tiethoclythuyet_update) && !empty($magiangvien_update)) {
 		$update  =  "UPDATE  lophocphan SET tenHocPhan = 	'$tenhocphan_update',soLuongSinhVien = '$soluongsinhvien_update', buoiHocLyThuyet  = '$buoihoclythuyet_update', phongHocLyThuyet = '$phonghoclythuyet_update',tietHocLyThuyet  = '$tiethoclythuyet_update', maGiangVien = '$magiangvien_update' WHERE  maLopHocPhan = '$malophocphan_update' ";	
		mysqli_query( $conn , $update );
	$malophocphan_update = "";
	$tenhocphan_update = "";
	$soluongsinhvien_update ="";
	$buoihoclythuyet_update = "";
	$phonghoclythuyet_update = "";
	$tiethoclythuyet_update = "";
	$magiangvien_update = "";
	$result = mysqli_query(  $conn , $qr );
}

// so 
	$malophocphan_new = test_input($_POST['malophocphan_new']);
	$tenhocphan_new = test_input($_POST['tenhocphan_new']);
	$soluongsinhvien_new = test_input($_POST['soluongsinhvien_new']);
	$buoihoclythuyet_new = test_input($_POST['buoihoclythuyet_new']);
	$phonghoclythuyet_new = test_input($_POST['phonghoclythuyet_new']);
	$tiethoclythuyet_new = test_input($_POST['tiethoclythuyet_new']);
	$magiangvien_new = test_input($_POST['magiangvien_new']);
	
 if ( !empty($malophocphan_new) && !empty($tenhocphan_new) && !empty($soluongsinhvien_new) && !empty($buoihoclythuyet_new)&& !empty($phonghoclythuyet_new) && !empty($tiethoclythuyet_new) && !empty($magiangvien_new)) {
 		$add  =  "INSERT INTO lophocphan VALUES ('$malophocphan_new' ,'$tenhocphan_new','$soluongsinhvien_new' ,  '$buoihoclythuyet_new',  '$phonghoclythuyet_new','$tiethoclythuyet_new', '$magiangvien_new' )";	
		mysqli_query( $conn , $add);
	$malophocphan_new = "";
	$tenhocphan_new = "";
	$soluongsinhvien_new ="";
	$buoihoclythuyet_new = "";
	$phonghoclythuyet_new = "";
	$tiethoclythuyet_new = "";
	$magiangvien_new = "";
	$result = mysqli_query(  $conn , $qr );
}
}
function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }


?>
<section>
  <div class="container">
  
		<table>
		       <form method="post" action=
            "<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            <td colspan="2"> 
					<h2>Xóa lớp học phần</h2>
			</td></tr>
        	<tr> <td>Ma lop hoc phan</td>
        		<td><input type="text" name="malophocphan"></td></tr>
        		<tr>
			<td colspan="2"> 
					<input type="submit" value="delete">
			</td></tr>
			<tr><td colspan="2"> 
					<hr>
			</td></tr>
			
			<tr><td colspan="2"> 
				<h2>Thay doi thong tin</h2>
			</td></tr>
			<tr> <td>Ma lop hoc phan:</td>
            		<td><input type="text" name="malophocphan_update"></td></tr>
            		<tr>
            <tr> <td>Ten hoc phan:</td>
            		<td><input type="text" name="tenhocphan_update"></td></tr>
            		<tr>
            <tr> <td>So luong sinh vien:</td>
            		<td><input type="text" name="soluongsinhvien_update"></td></tr>
            		<tr>

            <tr> <td>Phong hoc ly thuyet:</td>
            		<td><input type="text" name="phonghoclythuyet_update"></td></tr>
            		<tr>
            <tr> <td>Buoi hoc ly thuyet:</td>
            		<td><input type="text" name="buoihoclythuyet_update"></td></tr>
            		<tr>
            <tr> <td>Tiet hoc ly thuyet:</td>
            		<td><input type="text" name="tiethoclythuyet_update"></td></tr>
            		<tr>
			<tr> <td>Ma giang vien:</td>
            		<td><input type="text" name="magiangvien_update"></td></tr>
            		<tr>
            <tr><td colspan="2"> 
				<input type="submit" >
			</td></tr>
			<tr><td colspan="2"> <hr>
				</td></tr>
				<tr><td colspan="2"> 
				<h2>Them lop hoc phan</h2>
			</td></tr>
			<tr> <td>Ma lop hoc phan:</td>
            		<td><input type="text" name="malophocphan_new"></td></tr>
            		<tr>
            <tr> <td>Ten hoc phan:</td>
            		<td><input type="text" name="tenhocphan_new"></td></tr>
            		<tr>
            <tr> <td>So luong sinh vien:</td>
            		<td><input type="text" name="soluongsinhvien_new"></td></tr>
            		<tr>

            <tr> <td>Phong hoc ly thuyet:</td>
            		<td><input type="text" name="phonghoclythuyet_new"></td></tr>
            		<tr>
            <tr> <td>Buoi hoc ly thuyet:</td>
            		<td><input type="text" name="buoihoclythuyet_new"></td></tr>
            		<tr>
            <tr> <td>Tiet hoc ly thuyet:</td>
            		<td><input type="text" name="tiethoclythuyet_new"></td></tr>
            		<tr>
			<tr> <td>Ma giang vien:</td>
            		<td><input type="text" name="magiangvien_new"></td></tr>
            		<tr>
            <tr><td colspan="2"> 
				<input type="submit" >
			</td></tr>
            </form></table>

		<table>
			<tr>
				<th>ma lop hoc phan</th>
				<th>ten hoc phan</th>
				<th>so luong sinh vien</th>
				<th> buoi hoc ly thuyet </th>
				<th>phong hoc ly thuyet </th>
				<th> tiet hoc ly thuyet </th>
				<th> ma giang vien  </th>	
			</tr>
			<?php 
			 if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr> <td>". $row["maLopHocPhan"]."</td> <td>" . $row["tenHocPhan"]. " </td>" ."<td>". $row["soLuongSinhVien"]. " </td>" ."<td>". $row["buoiHocLyThuyet"]. " </td>" ."<td>". $row["phongHocLyThuyet"]. " </td>" ."<td>". $row["tietHocLyThuyet"]."<td>". $row["maGiangVien"] . "</td></tr>";
			  }
			} else {
			  echo "<h3>table is empty</h3>";
			} 
			mysqli_close($conn);
			?>

		</table>


</div>
  
</section>
