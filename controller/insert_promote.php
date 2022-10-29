<?php

include("../database/connect.php");

$promote_name = trim($_POST["promote_name"]);
$promote_detail = trim($_POST["promote_detail"]);

$sql = "INSERT INTO promote (promote_name, promote_detail)
  VALUES ('$promote_name', '$promote_detail')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../admin/manage_promote.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
