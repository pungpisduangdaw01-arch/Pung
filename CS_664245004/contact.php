<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ติดต่อเรา | RiceShop</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.php">🌾 RiceShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link" href="rice_types.php">สินค้า</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">เกี่ยวกับเรา</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact.php">ติดต่อ</a></li>
          <?php if (isset($_SESSION['fullname'])): ?>
            <li class="nav-item"><a class="btn btn-success ms-2" href="admin.php">Admin</a></li>
            <li class="nav-item"><a class="btn btn-success ms-2" href="logout.php">Logout</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="btn btn-success ms-2" href="login.php">เข้าสู่ระบบ</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="contact-header text-center">
    <div class="container">
      <h1 class="fw-bold">ติดต่อเรา</h1>
      <p class="lead">สามารถติดต่อ RiceShop ได้ตามช่องทางด้านล่าง</p>
    </div>
  </section>

  <!-- Contact Info Only -->
  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="info-box">
            <h4 class="mb-3">📍 ข้อมูลติดต่อ</h4>
            <p><strong>ที่อยู่:</strong> 89/2 หมู่ที่ 1 ต.บางแก้วฟ้า อ.นครชัยศรี จ.นครปฐม</p>
            <p><strong>โทร:</strong> 0957396221</p>
            <p><strong>อีเมล:</strong> Gatepoonthong@gmaill.com</p>
            <p><strong>Facebook:</strong> RiceShop Official</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p class="mb-0">© 2025 RiceShop | พัฒนาโดยนักศึกษา</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
