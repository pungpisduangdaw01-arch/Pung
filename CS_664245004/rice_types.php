<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชนิดข้าว | RiceShop</title>
    <!-- Bootstrap + Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <form method = "POST" action = "buy_exec.php">
  <section id="rooms" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">ชนิดข้าว</h2>
    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/standard.jpg" class="card-img-top" alt="Standard Room">
          <div class="card-body">
            <h5 class="card-title">ข้าวหอมมะลิ</h5>
            <p class="card-text">ข้าวหอมมะลิ</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
            <input type ="hidden" name = "hommali2" value ="50">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/deluxe.jpg" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">ห้องพักวิวสวย พร้อมสิ่งอำนวยความสะดวกครบครัน</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/suite.jpg" class="card-img-top" alt="Suite Room">
          <div class="card-body">
            <h5 class="card-title">Suite Room</h5>
            <p class="card-text">ห้องพักวิวสวย พร้อมสิ่งอำนวยความสะดวกครบครัน</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="rooms" class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/standard.jpg" class="card-img-top" alt="Standard Room">
          <div class="card-body">
            <h5 class="card-title">Standard Room</h5>
            <p class="card-text">ห้องพักวิวสวย พร้อมสิ่งอำนวยความสะดวกครบครัน</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/deluxe.jpg" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">ห้องพักวิวสวย พร้อมสิ่งอำนวยความสะดวกครบครัน</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/suite.jpg" class="card-img-top" alt="Suite Room">
          <div class="card-body">
            <h5 class="card-title">Suite Room</h5>
            <p class="card-text">ห้องสูทสุดหรู พร้อมห้องนั่งเล่นส่วนตัว</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="rooms" class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/standard.jpg" class="card-img-top" alt="Standard Room">
          <div class="card-body">
            <h5 class="card-title">Standard Room</h5>
            <p class="card-text">ห้องพักมาตรฐาน ราคาประหยัด</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/deluxe.jpg" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">ห้องพักวิวสวย พร้อมสิ่งอำนวยความสะดวกครบครัน</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/suite.jpg" class="card-img-top" alt="Suite Room">
          <div class="card-body">
            <h5 class="card-title">Suite Room</h5>
            <p class="card-text">ห้องสูทสุดหรู พร้อมห้องนั่งเล่นส่วนตัว</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="rooms" class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./img/standard.jpg" class="card-img-top" alt="Standard Room">
          <div class="card-body">
            <h5 class="card-title">Standard Room</h5>
            <p class="card-text">ห้องพักมาตรฐาน ราคาประหยัด</p>
            <button type="submit" class="btn btn-success text-white w-100">สั่งซื้อ</button>
            <input type ="hidden" name = "hommali" value ="buy">
          </div>
        </div>
      </div>
</section>
</form>

<!-- Navbar เหมือน index.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php">🌾 RiceShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">หน้าแรก</a></li>
        <li class="nav-item"><a class="nav-link active" href="rice_types.php">สินค้า</a></li>
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

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p class="mb-0">© 2025 RiceShop | พัฒนาโดยนักศึกษา</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
