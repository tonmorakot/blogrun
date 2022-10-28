<?php
session_start();
if($_SESSION["status"] !== "admin"){
  header("Location: ../controller/logout.php");
}
$title = "จัดการประชาสัมพันธ์";
$check_page = "admin";
include("../components/head.php");
?>

<body>
  <?php include("../components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">
      <div class="row">
        จัดการประชาสัมพันธ์
      </div>
    </div>
  </div>

  <?php include("../components/script.php"); ?>
</body>

</html>