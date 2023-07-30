<?php
  session_start();
  require_once 'connectdb.php';

  if(isset($_POST['login'])) {
    $user_em = $_POST['user_em'];
    $password = $_POST['password'];
    $passwordmd5 = md5($_POST['password']);

    if (empty($user_em)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลของท่านเพื่อเข้าใช้งานในระบบ';
        header("location: login.php");
    } elseif ((strlen($password) > 10 || strlen($password) < 8)) {
        $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 8 ถึง 10 ตัวอักษร';
        header("location: login.php");
    } else {
          try {
                  $sql = "SELECT * FROM user WHERE user = :user_em";
                  $check_data = $db->Prepare($sql);
                  $check_data->bindParam(":user_em", $user_em);
                  $check_data->execute();
                  $row = $check_data->fetch(PDO::FETCH_ASSOC);

                  if ($count = $check_data->rowCount() > 0) {
                    echo $count;
                    if ($user_em == $row['user']) {
                      echo $user_em;
                      /*if (password_verify($password, $row['password'])) {*/
                      if ($passwordmd5 == $row['pass']) {
                          $_SESSION['fullname'] = $row['fname']." ".$row['lname'];
                          $_SESSION['position'] = $row['position'];
                          $_SESSION['id_user'] = $row['id_user'];
                          $_SESSION['img'] = $row['img'];
                          header("location: admin.php");
                      } else {
                        $_SESSION['error'] = 'Password ผู้ใช้งานไม่ถูกต้อง';
                        header("location: login.php");
                      }
                    } else {
                      $_SESSION['error'] = 'ไม่พบผู้ใช้งานในระบบกรุณาติดต่อ Admin';
                      header("location: login.php");
                    }
                  } else {
                    $_SESSION['error'] = 'รหัสผ่านผู้ใช้งานไม่ถูกต้อง';
                    header("location: login.php");
                  }
          } catch (PDOEXCEPTION $e) {
            echo $e->getMassage();
          }
        }
      } else {
      $_SESSION['error'] = 'กรุณาติดต่อผู้พัฒนาคุณเข้าถึงแบบผิดปกติ';
      header("location: login.php");
    } 

?>
