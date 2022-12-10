<?php session_start(); ?>

<script src="../script/script.js"></script>
<section>
  <div class="container pt-3">
    <div class="row">
      <div class="table-responsive-xxl">
        <?php
        $dt = new DateTime;
        if (isset($_GET['year']) && isset($_GET['week'])) {
          $dt->setISODate($_GET['year'], $_GET['week']);
        } else {
          $dt->setISODate($dt->format('o'), $dt->format('W'));
        }
        $year = $dt->format('o');
        $week = $dt->format('W');
        ?>
        <!--Previous week-->
        <a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week - 1) . '&year=' . $year; ?>">Pre Week</a>
        <!--Next week-->
        <a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week + 1) . '&year=' . $year; ?>">Next Week</a>
        
        <table class="table table-striped table-bordered table-hover border-dark">
          <tr>
            <th>Employee</th>
            <?php
            do {
              if ($dt->format('d M Y') == date('d M Y')) {
                echo '<th style="background-color: yellow">' . $dt->format('l') . '<br>' . $dt->format('d M Y') . '</th><br>';
              }
              echo "<th>" . $dt->format('l') . "<br>" . $dt->format('d M Y') . "</th>\n";
              $dt->modify('+1 day');
            } while ($week == $dt->format('W'));
            ?>
          </tr>
        </table>

        <table class="table table-striped table-bordered table-hover border-dark">
          <thead class="table-dark">
            <tr>
              <th scope="row" id="id1" onload="getCurrentDate()">Ngày</th>
              <script>
                const d = new Date("2015-03-25");
                document.getElementById("id1").innerHTML = d;
              </script>
              <th>17/10/2022</th>
              <th>18/10/2022</th>
              <th>19/10/2022</th>
              <th>20/10/2022</th>
              <th>21/10/2022</th>
              <th>22/10/2022</th>
              <th>23/10/2022</th>
            </tr>
            <tr>
              <th>Ca</th>
              <th>Thứ 2</th>
              <th>Thứ 3</th>
              <th>Thứ 4</th>
              <th>Thứ 5</th>
              <th>Thứ 6</th>
              <th>Thứ 7</th>
              <th>Chủ nhật</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th rowspan="2" scope="rowgroup" class="table-primary">S</th>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
            </tr>
            <tr>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
            </tr>
            <tr>
              <th rowspan="2" scope="rowgroup" class="table-primary">C</th>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
            </tr>
            <tr>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
            </tr>
            <tr>
              <th rowspan="2" scope="rowgroup" class="table-primary">T</th>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
            </tr>
            <tr>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
              <td><a href="">Đăng ký</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--        1. Luồng cơ bản:
    1) Use case bắt đầu khi giảng viên nhấn chọn “ Đăng ký thực hành” 
trong menu làm việc của giảng viên hoặc use case bắt đầu khi 
người dùng ấn vào “Đăng ký” tương ứng với mỗi phòng thực hành 
trong giao diện xem danh sách phòng máy. Hệ thống sẽ hiển thị 
giao diện đăng ký thực hành
    2) Giảng viên nhấn chọn thông tin cho: lớp, tuần và nhấn chọn đăng 
ký cho ngày thực hành và buổi thực hành được thể hiện trên bảng 
đăng ký. Hệ thống hiển thị thông báo xác nhận đăng ký
    3) Giảng viên nhấn yes, hệ thống tự động cập nhập thông tin đăng ký 
trên bảng đăng ký, use case kết thúc
            2. Luồng rẽ nhánh
    - Tại bất kỳ thời điểm nào trong khi thực hiện use case nếu không kết nối 
được với cơ sở dữ liệu thì hệ thống sẽ hiển thị một thông báo lỗi và use 
case kết thúc
❖ Yêu cầu đặc biệt: Use case này chỉ được thực hiện bởi giảng viên
❖ Tiền điều kiện: Người quản lý phải đăng nhập với vai trò là giảng vien 
trước khi thực hiện các chức năng.
❖ Hậu điều kiện: Nếu use case thành công thì thông tin về thực hành sẽ 
được cập nhật vào bảng ThucHanh.
❖ Điểm mở rộng: Không có. -->