<?php
include '../connect.php';
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $key = $_GET['search'];
    $sql = "SELECT * FROM `phongmay` WHERE maPhongMay LIKE '%$key'";
} else {
    $sql = "SELECT * FROM `phongmay`";
}
$result = mysqli_query($conn, $sql);
?>

<form action="../teacher/timkiemphongmay.php" method="get">
    <input type="text" name="search" placeholder="Nhập tên phòng máy" value="<?php if (isset($_GET['search'])) { echo $_GET['search']; } ?>">
    <input type="submit" value="Tìm">
    <input type="button" value="Tất cả" onclick="window.location.href = '../teacher/timkiemphongmay.php'">;
</form>
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
        while ($row = mysqli_fetch_array($result))
        {
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