<?php
$title = "หน้าหลัก";
$check_page = "user";
include("components/head.php");
?>

<body>
  <?php include("components/navbar.php"); ?>

  <div class="blogrun">
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-12">
          <h4 class="mb-3">สมัครสมาชิก</h4>
          <form method="post" action="controller/insert_user.php" class="needs-validation">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="col-3">
                <label for="รหัสผ่าน" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <div class="col-3">
                <label for="ยืนยันรหัสผ่าน" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
              </div>

              <div class="col-12">
                <label for="tel" class="form-label">โทรศัพท์</label>
                <input type="tel" class="form-control" id="tel" name="tel" pattern="[0-9]{10}" required>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" id="address" name="address" required>
              </div>
            </div>
            <div class="mt-5"></div>
            <button class="w-100 btn btn-primary btn-lg" type="submit">สมัครสมาชิก</button>
          </form>
        </div>

      </div>

    </div>
  </div>

  <?php include("components/script.php"); ?>
</body>

</html>