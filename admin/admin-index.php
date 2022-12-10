<?php include '../header.php'; ?>

<?php include '../admin-navigation-bar.php'; ?>

<?php
if (isset($_GET['act'])) {
  switch ($_GET['act']) {
    case 'admin-profile':
      include 'admin-profile.php';
      break;
    case 'admin-home':
      include 'admin-profile.php';
      break;
    case 'quanlytaikhoan':
      include 'quanlytaikhoan.php';
      break;
    case 'quanlygiangvien':
      include 'quanlygiangvien.php';
      break;
    case 'quanlylophocphan':
      include 'quanlylophocphan.php';
      break;
    case 'quanlyphongmay':
      include 'quanlyphongmay.php';
      break;
    case 'quanlylichthuchanh':
      include 'quanlylichthuchanh.php';
      break;
    case 'xuatbaocao':
      include 'xuatbaocao.php';
      break;
    case 'doimatkhau':
      include 'doimatkhau.php';
      break;
    case 'logout':
      include '../logout.php';
      break;
    default:
      include 'profile.php';
      break;
  }
} else {
  include 'admin-profile.php';
}
?>

<?php include '../footer.php'; ?>