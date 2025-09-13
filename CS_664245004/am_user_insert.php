<?php
  include 'conn.php';
?>
<body class="d-flex flex-column min-vh-100">
  <div class="container mt-3">
    <form class="row g-3" name="am_user_insert" id="am_user_insert" method="post" action="am_exec.php" enctype="multipart/form-data">
        <h2 class="text-center mb-4">เพิ่มข้อมูลผู้ใช้</h2>
        <div>
            <label class="form-label">ชื่อจริง</label>
            <input class="form-control" type="text" name="fullname" id="fullname" placeholder="ชื่อจริง" required>
        </div>

        <div>
            <label class="form-label">Username</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="username" required>
        </div>
        <div class="col-12 text-center">
            <label class="form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="password" required>
        </div>

        <div class="col-12 text-center">
            <label class="form-label">อีเมล</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="อีเมล" required>
        </div>
        <div class="col-12 text-center">
            <label class="form-label">role</label>
        <select class="form-select" name="role" id="role">
          <option value="admin">-- admin --</option>
          <option value="customer">-- customer --</option>
        </select>
        </div>
        <div class="col-12 text-center">
            <input type="hidden" name="users_chk" id="users_chk" value="insert">
            <button type="submit" name="submit" id="submit" class="btn btn-success">บันทึกข้อมูล</button>
        </div>
    </form>
  </div>
</body>