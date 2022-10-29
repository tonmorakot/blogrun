<?php

include("../database/connect.php");

$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$confirmpassword = trim($_POST["confirmpassword"]);
$tel = trim($_POST["tel"]);
$address = trim($_POST["address"]);

if ($password !== $confirmpassword) {
  
  $error = "รหัสผ่านไม่ตรงกัน โปรดลองใหม่";
  header("Location: ../error.php?error=$error");

} else {

  $password = md5($password);

  $sql = "INSERT INTO users (firstname, lastname, email, password, tel, address, status)
  VALUES ('$firstname', '$lastname', '$email', '$password', '$tel', '$address', 'user')";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 

}

$conn->close();
