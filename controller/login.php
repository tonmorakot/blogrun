<?php 
  session_start();
  include("../database/connect.php");

  $email_login = $_POST["email_login"];
  $password = $_POST["password"];
  $password = md5($password);

  $sql = "SELECT * FROM users WHERE email = '$email_login' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $_SESSION["login"] = true;
    
    while($row = $result->fetch_assoc()) {
      $_SESSION["id"] = $row["id"];
      $_SESSION["firstname"] = $row["firstname"];
      $_SESSION["lastname"] = $row["lastname"];
      $_SESSION["email"] = $row["email"];
      $_SESSION["address"] = $row["address"];
      $_SESSION["status"] = $row["status"];
    }

    if($_SESSION["status"] == "admin"){
      header("Location: ../admin/index.php");
    } else if ($_SESSION["status"] == "user") {
      header("Location: ../index.php");
    }
    
  } else {
    
    session_unset();
    session_destroy(); 
    $error = "ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง !!!";
    header("Location: ../error.php?error=$error");

  }

  $conn->close();
?>