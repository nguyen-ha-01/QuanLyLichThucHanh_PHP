<?php
session_start();
include './connect.php';

if (isset($_POST['login']) && ($_POST['login'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM taikhoan WHERE tenDangNhap = '$user' AND matKhau = '$pass'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $row = mysqli_fetch_row($result);
    if ($row[0] == $user && $row['1'] == $pass && $row['2'] == 1) {
      $_SESSION['user'] = $user;
      header('location: ./admin/admin-index.php');
    } elseif ($row[0] == $user && $row['1'] == $pass && $row['2'] == 0) {
      $_SESSION['user'] = $user;
      header('location: ./teacher/teacher-index.php');
    } else {
      echo 'Thông tin đăng nhập không đúng!';
    }
  } else {
    echo 'Vui lòng nhập dữ liệu hợp lệ !';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .gradient-custom {
      /* fallback for old browsers */
      background: #6a11cb;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
  </style>
</head>
<!-- https://mdbootstrap.com/docs/standard/extended/login/ -->

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Trang đăng nhập</h2>
                <p class="text-white-50 mb-5">Vui lòng điền tên đăng nhập và mật khẩu!</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Tên đăng nhập</label>
                    <input type="text" name="user" id="typeEmailX" class="form-control form-control-lg">
                    <label class="form-label" for="typePasswordX">Mật khẩu</label>
                    <input type="password" name="pass" id="typePasswordX" class="form-control form-control-lg">
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="submit" name="login" value="Đăng nhập" class="btn btn-outline-light btn-lg px-5">
                  </div>
                </form>
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Quên mật khẩu?</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>