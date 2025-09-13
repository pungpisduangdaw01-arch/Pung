<?php 
include 'conn.php'; 
session_start();
if (isset($_POST['hommali2'])){
    $_session['hommali2']=$_POST['hommali2'];
}
$hommali2='';
if (isset($_session['hommali2'])){
    $hommali2=$_session['hommali2'];
}
$sql = " SELECT price from rice_types WHERE rice_id = '".$hommali2."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        $result_array = $result->fetch_assoc();
            $price = $result_array['price'];
}
$result2 = $conn->query("SELECT * FROM coupons ORDER BY discount asc");
              while ($row = $result2->fetch_assoc()) {
                $discount = $row['discount'];
              }
if ((isset($_POST['hommali']) && $_POST['hommali'] == "buy")||isset($_GET['chk'])): 
?>
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
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow-lg p-4" style="width: 400px; border-radius: 20px;">
    <h3 class="text-center mb-4">สมัครสมาชิก</h3>
      <div class="mb-3">
        <input type="text" name ="fullname" value="ข้าวหอมมะลิ" class="form-control" disabled>
        <input type ="hidden" name = "Price" value ="50">
      </div>

      <div class="mb-3">
        <label class="form-label">จำนวน (กก.)</label>
        <input type="number" name="amount" min="1" max="5" placeholder = "1-5 (กก.)" class="form-control" required>
      </div>
      <div>
        <label class="form-label">คูปอง</label>
        <div class="input-group mb-3">
          <select class="form-select" name="coupon" id="coupon">
            <?php
            $result3 = $conn->query("SELECT * FROM coupons ORDER BY discount asc");
              while ($row = $result3->fetch_assoc()) {
                  echo "<option value='{$row['coupon_id']}' $sel>{$row['discount']}</option>";
              }
            ?>
          </select>
          <a class='btn btn-outline-secondary' href='?<?php 
                echo 'chk=ms&hommali2=50';
            ?>' target='_self' role='button'>ยืนยันการใช้คูปอง</a>
        </div>  
      </div>
      <div class="mb-3">
        <input type="text" name ="fullname" value="<?php 
        if  (isset($_GET['hommali2'])){
            echo $_GET['hommali2'];
        }
        ?>" class="form-control" disabled>
        <input type ="hidden" name = "Price" value ="50">
      </div>
      <div>
      <button type="submit" class="btn btn-success w-100">ยืนยันการสั่งชื้อ</button>
      <input type ="hidden" name = "chk" value ="register">

    </div>
  </div>
</div>

    </div>
</body>
<?php endif; ?>