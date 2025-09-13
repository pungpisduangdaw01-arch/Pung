<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RiceShop - ขายข้าวออนไลน์</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">

</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">🌾 RiceShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link" href="rice_types.php">สินค้า</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">เกี่ยวกับเรา</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">ติดต่อ</a></li>
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

  <!-- Hero -->
  <section class="hero">
    <div class="text-center">
      <h1 class="display-4 fw-bold">ข้าวคุณภาพตรงจากชาวนา</h1>
      <a href="rice_types.php" class="btn btn-success btn-lg mt-3">สั่งซื้อเลย</a>
    </div>
  </section>

  <!-- Product Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">🌾 สินค้าแนะนำ</h2>
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card product-card">
            <img src="https://images.unsplash.com/photo-1622495890811-5e57c9397286" class="card-img-top" alt="ข้าวหอมมะลิ">
            <div class="card-body">
              <h5 class="card-title">ข้าวหอมมะลิ</h5>
              <p class="card-text">หอม นุ่ม เหมาะกับทุกเมนู</p>
              <p class="text-success fw-bold">฿120 / 5kg</p>
              <a href="#" class="btn btn-outline-success w-100">หยิบใส่ตะกร้า</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card product-card">
            <img src="https://images.unsplash.com/photo-1609137144813-ff5da11cbef9" class="card-img-top" alt="ข้าวกล้อง">
            <div class="card-body">
              <h5 class="card-title">ข้าวกล้อง</h5>
              <p class="card-text">เพื่อสุขภาพ ดีต่อหัวใจ</p>
              <p class="text-success fw-bold">฿150 / 5kg</p>
              <a href="#" class="btn btn-outline-success w-100">หยิบใส่ตะกร้า</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card product-card">
            <img src="https://images.unsplash.com/photo-1633435361462-23425cbbaf83" class="card-img-top" alt="ข้าวเหนียว">
            <div class="card-body">
              <h5 class="card-title">ข้าวเหนียว</h5>
              <p class="card-text">นึ่งหอม นุ่ม เหนียวกำลังดี</p>
              <p class="text-success fw-bold">฿100 / 5kg</p>
              <a href="#" class="btn btn-outline-success w-100">หยิบใส่ตะกร้า</a>
            </div>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
