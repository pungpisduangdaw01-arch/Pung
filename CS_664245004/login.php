<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เข้าสู่ระบบ | RiceShop</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

  <div class="login-card text-center">
    <h3 class="mb-4">🌾 RiceShop</h3>
    <p class="text-muted mb-4">เข้าสู่ระบบเพื่อจัดการร้านค้า</p>

    <form action="Rice_exec.php" method="post">
      <!-- Username -->
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="ชื่อผู้ใช้" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน" required>
      </div>

      <!-- Login button -->
      <button type="submit" class="btn btn-login text-white w-100">เข้าสู่ระบบ</button>
      <input type ="hidden" name = "chk" value ="login">
    </form>

    <div class="mt-3">
      <a href="register.php" class="text-success">สมัครสมาชิก</a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
