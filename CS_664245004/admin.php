<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

  <!-- Top Header -->
  <header>
    Admin
  </header>

  <!-- Center Image Slider -->
  <div class="center-icon container">
    <div id="adminCarousel" class="carousel slide w-100" data-bs-ride="carousel">
      <div class="carousel-inner rounded shadow">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786" class="d-block w-100" alt="ภาพที่ 1">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1590608897129-79e99f38e01e" class="d-block w-100" alt="ภาพที่ 2">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1581090700227-1e8b5b079d8e" class="d-block w-100" alt="ภาพที่ 3">
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#adminCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">ก่อนหน้า</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#adminCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">ถัดไป</span>
      </button>
    </div>
  </div>

  <!-- Bottom Menu -->
  <nav class="bottom-menu">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <a href="am_user_show.php" class="nav-link">
            <i class="bi bi-people"></i><br>
            Users
          </a>
        </div>
        <div class="col">
          <a href="admin_orders.php" class="nav-link">
            <i class="bi bi-cart-check"></i><br>
            Orders
          </a>
        </div>
        <div class="col">
          <a href="admin_reviews.php" class="nav-link">
            <i class="bi bi-chat-left-text"></i><br>
            Reviews
          </a>
        </div>
        <div class="col">
          <a href="admin_rice_types.php" class="nav-link">
            <i class="bi bi-box"></i><br>
            Rice Types
          </a>
        </div>
        <div class="col">
          <a href="admin_coupons.php" class="nav-link">
            <i class="bi bi-ticket-perforated"></i><br>
            Coupons
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 