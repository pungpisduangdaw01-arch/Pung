<?php
    include 'conn.php';
    $val = $_GET['val'];
    $sql = "SELECT * FROM users";
    $sql.= " WHERE md5(user_id) = '".$val."'";
    $result = $conn->query($sql);
    while($result_array = $result->fetch_assoc()) {
        $user_id      = $result_array['user_id'] ?? '';
        $fullname   = $result_array['fullname'] ?? '';
        $email        = $result_array['email'] ?? '';
    }
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CS Hotel :: แก้ไขข้อมูลผู้ใช้</title>
  <link rel="icon" type="image/png" href="./img/logo.png">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="container mt-3">
    <form class="row g-3" name="am_user_update" id="am_user_update" method="get" action="am_exec.php" enctype="multipart/form-data">
        <h2 class="text-center mb-4">แก้ไขข้อมูลผู้ใช้</h2>
        <div>
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
            <input class="form-control" type="text" name="user_id_hidden" id="user_id_hidden" value="<?php echo $user_id;?>" disabled>
        </div>
        <div>
            <label class="form-label">ชื่อจริง</label>
            <input class="form-control" type="text" name="fullname" id="fullname" value="<?php echo $fullname;?>">
        </div>
        <div>
            <label class="form-label">อีเมล</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo $email;?>">
        </div>
        <div class="col-12 text-center mt-4">
            <input type="hidden" name="users_chk" id="users_chk" value="update">
            <button type="submit" name="submit" id="submit" class="btn btn-success">บันทึกข้อมูล</button>
        </div>
    </form>
</div>
</body>

