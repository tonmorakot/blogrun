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
        <button type="button" class="btn btn-primary">ตั้งกระทู้</button>
      </div>
      <div class="row mt-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อกระทู้</th>
              <th scope="col">รายละเอียด</th>
              <th scope="col">จัดการ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>