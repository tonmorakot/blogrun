<?php
session_start();
if ($_SESSION["status"] !== "admin") {
  $error = "คุณไม่มีสิทธิ์เข้าถึงหน้านี้ !!!";
  header("Location: ../error.php?error=$error");
}
$title = "จัดการประชาสัมพันธ์";
$check_page = "admin";
include("../components/head.php");
?>

<body>
  <?php include("../components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">
      <form method="post" action="../controller/insert_promote.php">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="form-label">
                <h3>เพิ่มข้อมูลประชาสัมพันธ์</h3>
              </label>
              <input type="text" class="form-control" name="promote_name">
            </div>
            <div class="mb-3">
              <label class="form-label">
                <h3>รายละเอียด</h3>
              </label>
              <textarea class="form-control" rows="6" name="promote_detail"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary">เพิ่มข่าวสาร</button>
          </div>
        </div>
      </form>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">หัวข้อประชาสัมพันธ์</th>
                <th scope="col">รายละเอียด</th>
                <th scope="col">จัดการ</th>
              </tr>
            </thead>
            <tbody>
              <?php include("../controller/select_promote.php"); ?>
              <?php $i = $result->num_rows; ?>
              <?php if ($result->num_rows > 0) { ?>
                <?php while ($row = $result->fetch_assoc()) { ?>

                  <tr>
                    <th scope="row"><?=$i; ?></th>
                    <td><?= $row["promote_name"]; ?></td>
                    <td><?= $row["promote_detail"]; ?></td>
                    <td><a href="../controller/delete_promote.php?id=<?= $row["id"]; ?>" class="btn btn-danger">ลบ</a></td>
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