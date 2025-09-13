<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>สมัครสมาชิก</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow-lg p-4" style="width: 400px; border-radius: 20px;">
    <h3 class="text-center mb-4">สมัครสมาชิก</h3>
    <form method="POST" action="Rice_exec.php">
      <div class="mb-3">
        <label class="form-label">ชื่อ-นามสกุล</label>
        <input type="text" name="fullname" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">ชื่อผู้ใช้</label>
        <input type="text" name="username" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">อีเมล</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">รหัสผ่าน</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-success w-100">สมัครสมาชิก</button>
      <input type ="hidden" name = "chk" value ="register">
    </form>

    <div class="text-center mt-3">
      <small>มีบัญชีแล้ว? <a href="login.php">เข้าสู่ระบบ</a></small>
      
    </div>
  </div>
</div>

</body>
</html>
