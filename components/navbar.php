<!-- Fixed navbar -->
<?php session_start(); ?>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">

      <?php if ($check_page == "admin") { ?>
        <a class="navbar-brand" href="../index.php">BlogRun</a>
      <?php } ?>

      <?php if ($check_page == "user") { ?>
        <a class="navbar-brand" href="index.php">BlogRun</a>
      <?php } ?>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <?php if ($check_page == "admin") { ?>

            <li class="nav-item">
              <a class="nav-link" href="manage_promote.php">จัดการประชาสัมพันธ์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage_board.php">จัดการกระดานสนทนา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage_users.php">จัดการผู้ใช้</a>
            </li>

          <?php } else if ($check_page == "user") { ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php">ประชาสัมพันธ์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="board.php">กระดานสนทนา</a>
            </li>

          <?php } ?>

        </ul>
        <?php if (isset($_SESSION["login"]) && $_SESSION["login"]) { ?>

          <span class="text-white me-2"><?= $_SESSION["firstname"] ?></span>
          <span class="text-white me-2"><?= $_SESSION["lastname"] ?></span>

          <?php if($check_page == "admin") { ?>
            <a href="../admin/index.php" class="btn btn-outline-primary me-2">จัดการ</a> 
            <a href="../controller/logout.php" class="btn btn-outline-danger me-2">logout</a> 
          <?php } else if($check_page == "user") { ?>
            <?php if($_SESSION["status"] == "admin") { ?>
              <a href="admin/index.php" class="btn btn-outline-primary me-2">จัดการ</a> 
            <?php } ?>
            <a href="controller/logout.php" class="btn btn-outline-danger me-2">logout</a> 
          <?php } ?>

        <?php } else { ?>

          <form method="post" action="controller/login.php" class="d-flex">
            <input class="form-control me-2" type="text" name="email_login" placeholder="Email" required>
            <input class="form-control me-2" type="password" name="password" placeholder="Password" required>
            <button class="btn btn-outline-success me-2" type="submit">login</button>
            <a href="register.php" class="btn btn-outline-primary me-2">register</a>
          </form>

        <?php } ?>

      </div>
    </div>
  </nav>
</header>
<main class="flex-shrink-0">
  <div class="container mt-5">