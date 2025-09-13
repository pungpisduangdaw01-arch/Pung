<?php
  session_start();
  include 'conn.php'; // เชื่อมต่อฐานข้อมูล
  $sql = "SELECT * FROM users ORDER BY user_id ASC";
  $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Admin - ผู้ใช้</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">

</head>
<body>
  <header>
    จัดการผู้ใช้
  </header>
  <div class="container mt-4">
    <h4 class="mb-3">รายการผู้ใช้ทั้งหมด</h4>

    <br>
    <div>
    <a href="am_user_insert.php" class="btn btn-success btn-lg me-3">
  <i class="bi bi-plus"></i> เพิ่มผู้ใช้งาน
    </a>
    <a href="am_user_update.php" 
       class="btn btn-secondary btn-lg me-3" >
      <i class="bi bi-pencil"></i> แก้ไขผู้ใช้งาน
    </a>
    <a href="am_user_delete.php" 
       class="btn btn-danger btn-lg" >
      <i class="bi bi-trash"></i> ลบข้อมูลผู้ใช้
    </a>
  </div>
    </br>

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-center">
        <thead>
          
        </thead>
        <tbody>
          <?php
    include 'conn.php';
    $sql = "SELECT * FROM users";

    $search = isset($_GET['search']) ? $_GET['search'] : '';
    if($search <> ''){
        $sql.= " WHERE user_id LIKE '%".$search."%'";
    }
    $sql.= " ORDER BY user_id ASC";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='95%' border='0' align='center'>";
        echo "<tr bgcolor='green'>";
        echo "<td width='5%'><center>รหัสผู้ใช้</center></td>";
        echo "<td width='30%'>ชื่อจริง</td>";
        echo "<td width='15%'>Email</td>";
        echo "<td width='15%'>role</td>";
        echo "</tr>";

    while($result_array = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><center>".$result_array['user_id']."</center></td>";
        echo "<td>".$result_array['fullname']."</td>";
        echo "<td>".$result_array['email']."</td>";
        echo "<td>".$result_array['role']."</td>";
        echo  "</tr>";
    }
    echo "</table>";
    }else{
        echo "<center>ไม่พบข้อมูล</center>";
    }

    $conn->close();
    ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="bottom-menu">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <a href="am_users_show.php" class="nav-link">
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
</body>
</html>
