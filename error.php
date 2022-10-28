<?php
$title = "กระดานสนทนา";
$check_page = "user";
include("components/head.php");
?>

<body>
  <?php include("components/navbar.php"); ?>
  <div class="blogrun">
    <div class="col-md-12">
      <div class="row">
        <h1><?= $_GET["error"]; ?></h1>
      </div>
      <div class="row">
        <div class="col-md-3"><button class="btn btn-danger" onclick="history.back()">ย้อนกลับ</button></div>
      </div>
    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>