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
        <h1><?=$_GET["error"];?></h1>
      </div>
    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>