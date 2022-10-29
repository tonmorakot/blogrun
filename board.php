<?php
session_start();
$title = "กระดานสนทนา";
$check_page = "user";
include("components/head.php");
?>

<body>
  <?php include("components/navbar.php"); ?>
  <div class="blogrun">
    <div class="col-md-12">
      <?php if (isset($_SESSION["login"]) && $_SESSION["login"]) { ?>
        <div class="row">
          <a href="board_new.php" type="button" class="btn btn-primary">ตั้งกระทู้</a>
        </div>
      <?php } ?>
      <div class="row mt-3">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อกระดานสนทนา</th>
              <th scope="col">รายละเอียด</th>
              <th scope="col">ผู้สร้าง</th>
            </tr>
          </thead>
          <tbody>
            <?php include("controller/select_board.php"); ?>
            <?php include("controller/select_user.php"); ?>
            <?php $i = $result->num_rows; ?>
            <?php if ($result->num_rows > 0) { ?>
              <?php while ($row = $result->fetch_assoc()) { ?>

                <tr>
                  <th scope="row"><?= $row["id"] ?></th>
                  <td><?= $row["board_name"] ?></td>
                  <td><?= $row["board_detail"] ?></td>
                  <td><?=user_search($row["board_create_id"]) ?></td>
                </tr>

                <?php $i--; ?>
              <?php } ?>
            <?php } ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>