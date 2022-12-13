<?php
	$user = $_POST['user'];
  $pass = $_POST['pass'];
	$conn = mysqli_connect('localhost',$user,$pass,'dangkylichthuchanh');
	if(!$conn){
		echo("can't connect to database");
	}else{
		echo("connected");
	}
	  $qr = "SELECT * FROM giangvien ";
	$result = mysqli_query($conn,$qr); 		
        // Checking for a POST request
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $ma = test_input($_POST["id_find"]);
          $ten = test_input($_POST["ten_new"]);
          $sdt= test_input($_POST["sdt_new"]);
        	$check = "SELECT * FROM giangvien WHERE maGiangVien= $ma";
			$findGv = mysqli_query($conn,  $check);
          if (empty($ten)  || strlen($ten) < 3 || empty($sdt) || strlen($sdt) <10) {
				
			} else {
				   $update = "UPDATE giangvien SET  tenGiangVien = '$ten', soDienThoai = '$sdt' WHERE maGiangVien = '$ma'";
					 mysqli_query($conn,$update);	
					 $result = mysqli_query($conn,$qr); 						
				
			}

			//xoa gv 
			$ma_del = test_input($_POST["id_del"]);
          	if(!empty($ma_del)){
          		$del = "DELETE FROM giangvien WHERE maGiangVien = '$ma_del'";
          		$del_tk = "DELETE FROM taikhoan WHERE tenDangNhap = '$ma_del'";
          		mysqli_query($conn,$del);	
          		mysqli_query($conn,$del_tk);	
          		$result = mysqli_query($conn,$qr); 						
          	}
			//them 

          	$tendangnhap = test_input($_POST["tendangnhap"]);
         	$tenThem = test_input($_POST["tengiangvien"]);
          	$sdtThem= test_input($_POST["sodienthoai"]);
          	$matkhau = test_input($_POST["matkhau"]);
          	$quyen = test_input($_POST["quyen"]);
          	if(empty($tendangnhap)  || empty($tenThem) || empty($sdtThem) || empty($matkhau) || empty($quyen)){
          		echo "khong the them ";
          	}else{
          		$themtk = "INSERT INTO taikhoan VALUES ('$tendangnhap' , '$matkhau' , '0')"; 
          		$themgv = "INSERT INTO giangvien VALUES ('$tendangnhap' , '$tenThem', '$sdtThem' )";
          		mysqli_query($conn,$themtk); 						
          		mysqli_query($conn,$themgv);
          		$result = mysqli_query($conn,$qr); 		
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
	     

	 <div style="width:300px; height: 1000px;display: block;float: left;">
	 	<table>
		       <form method="post" action=
            "<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            <tr>
			<td colspan="2"><h2>Them giang vien</h2></td></tr>
            <tr>
           <td> Ten dang nhap: </td>
             <td><input type="text" name="tendangnhap"><br></td>
         </tr>
             <tr>
           <td> Mat khau :</td><td> <input type="text" name="matkhau"><br></td></tr>
             <tr>
           <td> Quyen :</td><td><input type="number"name = "quyen" value="0"><br></td>
       </tr>
            <tr><td>Ten giang vien :</td><td> <input type="text" name="tengiangvien"><br></td></tr>
            <tr><td>So dien thoai : </td><td><input type="number" name="sodienthoai"><br></td></tr>
           <tr>
			<td colspan="2"> <hr></td></tr>
            <tr>
            <td colspan="2"><input type="submit" name = "them" value="Them"></td></tr>
            <tr>
			<td colspan="2"> <hr></td></tr>
           <tr>
			<td colspan="2">
			<h2>Sua thong tin</h2></td></tr>
			<tr><td>Ma giang vien:</td><td> <input type="text" name="id_find"><br></td></tr>
			<?php
  echo "<tr> <td>". $ten. " </td>" ."<td>".$sdt."</td></tr>";      
?>
			<?php 
			$gv = mysqli_fetch_assoc($findGv);
			echo  $gv["maGiangVien"]. "$nbsp".$gv["tenGiangVien"]. "$nbsp".$gv["soDienThoai"]."<br>";
			?>
			<tr>
			<td colspan="2"> <hr></td></tr>
			<tr><td>Ten giang vien: </td><td><input type="text" name="ten_new"><br></td></tr>
			<tr><td>So dien thoai:</td><td> <input type="number" name="sdt_new"><br></td></tr>
			<tr><td><input type="submit" value="Change" name="sua"></td>
			<td><input type="reset" value="Reset"></td></tr>
			<tr>
			<td colspan="2"> <hr></td></tr>
			<tr>
			<td colspan="2"><h2>Xoa giang vien </h2></td></tr>
			<tr><td>Ma giang vien: </td><td><input type="text" name="id_del"><br></td></tr>
			<tr>
			<td colspan="2"> <hr></td></tr>
			<tr>
			<td colspan="2"><input type="submit" value="Xoa" name="xoa"></td>
			</tr>	
			<?php

			?>

			


		</form>
	</table>
		<table>
			<tr>
				<th>ma giang vien</th>
				<th>ten giang vien</th>
				<th>so dien thoai</th>
			</tr>
			<?php 

			 if (mysqli_num_rows($result) > 0) {

			  while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr> <td>". $row["maGiangVien"]."</td> <td>" . $row["tenGiangVien"]. " </td>" ."<td>". $row["soDienThoai"]."</td></tr>";
			  }

			} else {
			  echo "<h3>table is empty</h3>";
			} 
		
			mysqli_close($conn);
			?>

		</table>
	

    
	</div> 
    
</div>
</section>
