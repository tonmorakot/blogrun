<?php
$title = "ประชาสัมพันธ์";
$check_page = "user";
include("components/head.php");
?>

<body>
  <?php include("components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">

      <div class="row">

      <?php include("controller/select_promote.php"); ?>
      <?php if ($result->num_rows > 0) { ?>
      <?php while ($row = $result->fetch_assoc()) { ?>

        <div class="col-md-4 mt-3">

          <div class="card">
            <div class="card-header">
              <?=$row["promote_name"]; ?>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
              <?=$row["promote_detail"]; ?>
              </blockquote>
            </div>
          </div>

        </div>

        <?php } ?>
        <?php } ?>

      </div>

    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>