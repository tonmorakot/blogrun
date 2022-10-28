<?php
$title = "จัดการผู้ใช้";
$check_page = "admin";
include("../components/head.php");
?>

<body>
  <?php include("../components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">
      <div class="row mt-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อ - นามสกุล</th>
              <th scope="col">Email</th>
              <th scope="col">โทรศัพท์</th>
              <th scope="col">ที่อยู่</th>
              <th scope="col">สถานะ</th>
              <th scope="col">จัดการ</th>
            </tr>
          </thead> <tbody>
          <?php include("../controller/select_users.php"); ?>
          <?php if ($result->num_rows > 0) { ?>
          <?php $i = 1; ?>
          <?php while ($row = $result->fetch_assoc()) { ?>
             
            <tr>
              <th scope="row"><?=$i?></th>
              <td><?=$row["firstname"]." ".$row["lastname"]?></td>
              <td><?=$row["email"]?></td>
              <td><?=$row["tel"]?></td>
              <td><?=$row["address"]?></td>
              <td><?=$row["status"]?></td>
              <td><button class="btn btn-danger">ลบ</button></td>
            </tr>
          <?php $i++; ?>
          <?php } ?>
          <?php } else { ?>

            <tr>
              <td colspan="4" class="text-center">
                ไม่มีข้อมูล...
              </td>
            </tr>

          <?php } ?>

           </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php include("../components/script.php"); ?>
</body>

</html>