<?php include '../header.php'; ?>

<?php include '../teacher-navigation-bar.php'; ?>

<?php
if (isset($_GET['act'])) {
	switch ($_GET['act']) {
		case 'teacher-profile':
			include 'teacher-profile.php';
			break;
		case 'teacher-home':
			include 'teacher-profile.php';
			break;
		case 'xemphongmay':
			include 'xemphongmay.php';
			break;
		case 'dangkylich':
			include 'dangkylichthuchanh.php';
			break;
		case 'doimatkhau':
			include '../doimatkhau.php';
			break;
		case 'logout':
			include '../logout.php';
			break;
		default:
			include 'teacher-profile.php';
			break;
	}
} else {
	include 'teacher-profile.php';
}
?>

<?php include '../footer.php'; ?>