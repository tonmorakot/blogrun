<?php
session_start();
if($_SESSION["status"] !== "admin"){
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
        จัดการกระดาษสนทนา
      </div>
    </div>
  </div>

  <?php include("../components/script.php"); ?>
</body>

</html>