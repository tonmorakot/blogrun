<?php
session_start();
if ($_SESSION["status"] !== "admin") {
  $error = "คุณไม่มีสิทธิ์เข้าถึงหน้านี้ !!!";
  header("Location: ../error.php?error=$error");
}
$title = "จัดการกระดาษสนทนา";
$check_page = "admin";
include("../components/head.php");
?>

<body>
  <?php include("../components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">หัวข้อกระดานสนทนา</th>
                <th scope="col">รายละเอียด</th>
                <th scope="col">จัดการ</th>
              </tr>
            </thead>
            <tbody>
              <?php include("../controller/select_board.php"); ?>
              <?php $i = $result->num_rows; ?>
              <?php if ($result->num_rows > 0) { ?>
                <?php while ($row = $result->fetch_assoc()) { ?>

                  <tr>
                    <th scope="row"><?=$i; ?></th>
                    <td><?= $row["board_name"]; ?></td>
                    <td><?= $row["board_detail"]; ?></td>
                    <td><a href="../controller/delete_board.php?id=<?= $row["id"]; ?>" class="btn btn-danger">ลบ</a></td>
                  </tr>

                <?php $i--; ?>
                <?php } ?>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php include("../components/script.php"); ?>
</body>

</html>