<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เกี่ยวกับเรา | RiceShop</title>
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
          <li class="nav-item"><a class="nav-link active" href="about.php">เกี่ยวกับเรา</a></li>
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

  <!-- Header -->
  <section class="about-header text-center">
    <div class="container">
      <h1 class="fw-bold">เกี่ยวกับเรา</h1>
      <p class="lead">เรียนรู้เพิ่มเติมเกี่ยวกับ RiceShop และความตั้งใจของเรา</p>
    </div>
  </section>

  <!-- Content -->
  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="about-section">
            <h3 class="mb-3">เราคือใคร?</h3>
            <p>
              RiceShop ก่อตั้งขึ้นเพื่อเป็นสะพานเชื่อมระหว่างชาวนากับผู้บริโภคโดยตรง 
              เราคัดสรรข้าวคุณภาพสดใหม่จากแปลงนา ส่งตรงถึงบ้านของคุณในราคายุติธรรม
            </p>

            <h3 class="mt-4 mb-3">จุดเด่นของเรา</h3>
            <ul>
              <li>คัดสรรข้าวใหม่ทุกฤดูกาล ไม่ผสมเก่า</li>
              <li>ส่งตรงจากชาวนา ไม่ผ่านคนกลาง</li>
              <li>รักษาคุณค่าทางโภชนาการและความหอมอร่อย</li>
            </ul>

            <h3 class="mt-4 mb-3">พันธกิจของเรา</h3>
            <p>
              มุ่งมั่นที่จะส่งมอบข้าวคุณภาพสูงในราคายุติธรรม พร้อมสนับสนุนเกษตรกรไทย 
              เพื่อสร้างความยั่งยืนทั้งต่อผู้บริโภคและผู้ผลิต
            </p>

            <div class="text-center mt-4">
              <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" 
                   alt="Rice field" class="img-fluid rounded shadow">
              <p class="mt-3 text-muted">“จากทุ่งนา สู่จานข้าวของคุณ”</p>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
