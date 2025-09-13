<?php
    include 'conn.php';
    // cms_users_delete.php
    if (isset($_GET['users_chk']) && $_GET['users_chk'] == "delete"){
        $val = $_GET['val'];
        $sql = "DELETE FROM users WHERE md5(user_id)='$val'";

    if($conn->query($sql) === TRUE){
            echo "<br><center>ลบข้อมูลเรียบร้อย;</center>";
            echo "<br><center>กรุณารอสักครู่...</center>";
            echo "<meta http-equiv='refresh' content='1;url=am_user_delete.php'>";
    }else{
        echo "<br><center><h3>ลบข้อมูลไม่สำเร็จ</h3></center>";
        echo "<center><h3>กรุณาลองใหม่อีกครั้ง...</h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=am_user_delete.php'>";
    }

    $conn->close();
    }

    if (isset($_GET['users_chk']) && $_GET['users_chk'] == "update"){
        $user_id    = isset($_GET['user_id']) ? $_GET['user_id'] : '';
        $fullname = isset($_GET['fullname']) ? $_GET['fullname'] : '';
        $email      = isset($_GET['email']) ? $_GET['email'] : '';

        $sql = "UPDATE users SET fullname = '$fullname', email = '$email'";
        $sql.= " WHERE user_id = '$user_id'";

    if($conn->query($sql) === TRUE){
            echo "<br><center>แก้ไขข้อมูลเรียบร้อย;</center>";
            echo "<br><center>กรุณารอสักครู่...</center>";
            echo "<meta http-equiv='refresh' content='1;url=am_user_update.php'>";
    }else{
        echo "<br><center><h3>เเก้ไขข้อมูลไม่สำเร็จ</h3></center>";
        echo "<center><h3>กรุณาลองใหม่อีกครั้ง...</h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=am_user_update2.php'>";
    }

    $conn->close();
    }

    if (isset($_POST['users_chk']) && $_POST['users_chk'] == "insert"){
        $fullname   = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $username   = isset($_POST['username']) ? $_POST['username'] : '';
        $password   = isset($_POST['password']) ? $_POST['password'] : '';
        $email        = isset($_POST['email']) ? $_POST['email'] : '';
        $role       = isset($_POST['role']) ? $_POST['role'] : '';

    $sql = "INSERT INTO users(fullname, username, password ,email,role)";
    $sql.= " VALUES('$fullname','$username','$password','$email','$role')";

    if($conn->query($sql) === TRUE){
        echo "<br><center>เพิ่มข้อมูลเรียบร้อย</center>";
        echo "<br><center>กรุณารอสักครู่...</center>";
        echo "<meta http-equiv='refresh' content='1;url=am_user_show.php'>";
    }else{
        echo "<br><center><h3>เพิ่มข้อมูลไม่สำเร็จ</h3></center>";
        echo "<center><h3>กรุณาลองใหม่อีกครั้ง...</h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=am_user_insert.php'>";
    }

    $conn->close();
    }
?>