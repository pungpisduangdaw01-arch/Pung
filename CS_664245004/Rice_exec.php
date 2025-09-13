<?php
    // login.php
    session_start();
    include 'conn.php';

    if (isset($_POST['chk']) && $_POST['chk'] == "login") {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

    $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $result_array = $result->fetch_assoc();
        $_SESSION['fullname']    = $result_array['fullname'];

        echo "<br><center><h3>ยินดีต้อนรับคุณ ".$_SESSION['fullname']." </h3></center>";
        echo "<br><center><h3>กรุณารอสักครู่...</h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=index.php'>";
    } else {
        echo "<br><center><h3>ไม่พบข้อมูลผู้ใช้</h3></center>";
        echo "<center><h3>กรุณาสมัครสมาชิกก่อน</h3></center><br>";
        echo "<meta http-equiv='refresh' content='2;url=register.php'>";
    }

    $conn->close();
    
    }
    
    if (isset($_POST['chk']) && $_POST['chk'] == "register"){
        $fullname   = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $username   = isset($_POST['username']) ? $_POST['username'] : '';
        $email        = isset($_POST['email']) ? $_POST['email'] : '';
        $password     = isset($_POST['password']) ? $_POST['password'] : '';

    $sql = "INSERT INTO users(fullname , username , email , password  )";
    $sql.= " VALUES('$fullname','$username','$email','$password')";

    if($conn->query($sql) === TRUE){
        echo "<br><center>สมัครสมาชิกเรียบร้อย</center>";
        echo "<br><center>กรุณารอสักครู่...</center>";
        echo "<meta http-equiv='refresh' content='2;url=index.php'>";
    }else{
        echo "<br><center><h3>สมัครสมาชิกไม่สำเร็จ</h3></center>";
        echo "<center><h3>กรุณาลองใหม่อีกครั้ง...</h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=register.php'>";
    }

    $conn->close();
    }
    ?>