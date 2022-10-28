<!-- Fixed navbar -->
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">

      <?php if($check_page == "admin") { ?> 
        <a class="navbar-brand" href="../index.php">BlogRun</a>
      <?php } ?>

      <?php if($check_page == "user") { ?> 
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
              <a class="nav-link" href="manage_board.php">จัดการกระดาษสนทนา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage_users.php">จัดการผู้ใช้</a>
            </li>

          <?php } else if($check_page == "user") { ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php">ประชาสัมพันธ์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="board.php">กระดานสนทนา</a>
            </li>

          <?php } ?>

        </ul>

        <form method="post" action="admin/index.php" class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Username">
          <input class="form-control me-2" type="password" placeholder="Password">
          <button class="btn btn-outline-success me-2" type="submit">login</button>
          <a href="register.php" class="btn btn-outline-primary me-2">register</a>
        </form>

      </div>
    </div>
  </nav>
</header>
<main class="flex-shrink-0">
  <div class="container mt-5">