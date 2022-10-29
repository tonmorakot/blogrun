<?php
session_start();
$title = "ตั้งกระดานสนทนา";
$check_page = "user";
include("components/head.php");
?>

<body>
  <?php include("components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">
      <form method="post" action="controller/insert_board.php">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="form-label">
                <h3>ชื่อกระดานสนทนา</h3>
              </label>
              <input type="text" class="form-control" name="board_name">
            </div>
            <div class="mb-3">
              <label class="form-label">
                <h3>รายละเอียด</h3>
              </label>
              <textarea class="form-control" rows="6" name="board_detail"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary">ตั้งกระดานสนทนา</button>
          </div>
        </div>
      </form>
      
    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>